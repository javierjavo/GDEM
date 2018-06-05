<?php
    $homeRute = "/GDEM";
    //error_reporting(0);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    if($_SESSION['alert']!=NULL){
        echo '<script language="javascript">alert("'.$_SESSION['alert'].'");</script>';
        unset($_SESSION['alert']);
    }
    
    if($_SESSION['usr']==NULL){
        if ($_SESSION['menu_status'])
                {
                    echo '
                    <div class="collapse show bg-light" id="navbarHeader" style="">';
                }
        else
                {
                    echo '
                    <div class="collapse bg-light" id="navbarHeader" style="">';
                }
    echo'
        <div class="container-fluid">
            <div class="row">
                <div class="header_chart col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                
                                </div>
                                <div class="col-sm-6"> 
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 mr-4"> 
                            <div class="row">
                                <div class="col-sm-6 py-4">
                                    
                                </div>
                                <div class="col-sm-6"> 
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="row">
                        
                        <div class="col-sm-12"> 
                            <img class="img-fluid header_signin my-2" src="'.$homeRute.'/media/niños_lapiz.jpg" alt="Logo_GDEM">
                            <br><a href="#" id="loginButton" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Entrar a tu sesión / Login </a>
                            <a href="'.$homeRute.'/pages/formulario.php" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Registrarse / Create account </a>  
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>';
    }else{
       include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
        session_start();
        if ($resultadoT =$conexion->query("SELECT tipousuario FROM personalinfo where nombre='" . $_SESSION['usr'] . "'"))
        {
            while($fila_actual = $resultadoT->fetch_row())
            {
                echo 
                    '
                        <div class="navbar navbar-light bg-light justify-content-end p-0 pr-2"><i class="fas fa-user mx-2"></i><h1 class="text-muted">'.$_SESSION['usr'].'</h3></div>
                    ';
                    
                if ($_SESSION['menu_status'])
                {
                    echo '
                    <div class="collapse show bg-light" id="navbarHeader" style="">';
                }
                else
                {
                    echo '
                    <div class="collapse bg-light" id="navbarHeader" style="">';
                }
                echo '
                        <div class="container-fluid">
                            <div class="row">
                                <div class="header_chart col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <img class="img-fluid" src="'.$homeRute.'/media/Logo_probem.png" alt="Logo_GDEM">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid header_logoGDEM" src="'.$homeRute.'/media/GDEM2.png" alt="Logo_GDEM">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <div class="row">
                                        <div class="col-sm-12">
                    ';
                if ($fila_actual[0] == 'admin')
                {
                    $_SESSION['usr_type'] = "admin";
                    echo'   
                                                <div class="navbar m-0 p-0 justify-content-center">
                                                    <a class="menuOp" href="">Agregar eventos</a>
                                                    <a class="menuOp" href="/GDEM/pages/tools/Maker.php">Agregar examenes</a>
                                                    <a class="menuOp" href="">Info escuelas</a>
                                                    <a class="menuOp" href="/GDEM/pages/libros.php">Materiales en linea</a>
                    ';
                }
                else
                {
                    echo
                        '
                                                <div class="navbar m-0 p-0 justify-content-center">
                                                    <a class="menuOp" href="/GDEM/pages/perfil.php">Mi Perfil</a>
                                                    <a class="menuOp" href="/GDEM/pages/tools/Maker.php">Examenes cognitivos</a>
                                                    <a class="menuOp" href="">Escuelas cercanas</a>
                                                    <a class="menuOp" href="/GDEM/pages/favoritos.php">Favoritos</a>
                                                    <a class="menuOp" href="/GDEM/pages/libros.php">Materiales en linea</a>
                        ';
                }
                echo 
                    '
                        <a class="menuOp" href="'.$homeRute.'/servicios/logout.php">Logout</a>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    ';
            }
        }
        else
        {
            echo 'Error en la validacion de tipo de usuario';
        }
        
    }

    echo'
    <!-- Formulario Login -->
   	<div class="inicioIinvisible">
   	    <div id="fondoFormLogin" class="fondoClickFormLoginin"></div>
   	    <div class="Animatedform text-center align-items-center">
            <label for="user" class="my-2">Usuario</label><br>
            <input id="colectUserInfoName" name="user" type="text"><br>
            <label for="pass" class="my-2">Contraseña</label><br>
            <input id="colectUserInfoPass" name="pass" type="password"><br>
            <input id="sendInformationLogin" class="m-3 btn btn-primary" type="button" value="login">
            <input id="cancelFormLogin" class="m-3 btn btn-danger" type="button" value="cancel">
        </div>
   	</div>';

    if(isset($_GET['sts'])){
        echo $_GET['sts'];
    }
?>