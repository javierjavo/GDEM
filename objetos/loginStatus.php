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
    echo'<div class="collapse show bg-light" id="navbarHeader" style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 py-4">
                    <div class="row">
                        <div class="col-sm-6 py-4">
                            <div class="row">
                                <div class="col-sm-6 py-4">
                                    <img class="img-fluid" src="'.$homeRute.'/media/Logo_probem.png" alt="Logo_GDEM">
                                </div>
                                <div class="col-sm-6 py-4"> 
                                    <h3 class="text-center">PROBEMJal</h3>
                                    <p class="text-center">Programa Binacional de Educación Migrante/ Binational Program for Migrant Education</p>  
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-4"> 
                            <div class="row">
                                <div class="col-sm-6 py-4">
                                    <img class="img-fluid" src="'.$homeRute.'/media/GDEM2.png" alt="Logo_GDEM">
                                </div>
                                <div class="col-sm-6 py-4"> 
                                    <h3 class="text-center">GDEM</h3>
                                    <p class="text-center">Guia Digital de Educación al Migrante / National Digital Guide for Migrants</p>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 py-4 text-center">
                    <div class="row">
                        <div class="col-sm-6 py-4">
                            <h5> Modo Interactivo - Interactive Mode </h5>
                            <a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Activar</a>
                            <a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Desactivar</a>  
                        </div>
                        <div class="col-sm-6 py-4"> 
                            <img class="img-fluid" src="'.$homeRute.'/media/niños_lapiz.jpg" alt="Logo_GDEM">
                            <a href="#" id="loginButton" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Entrar a tu sesión / Login </a>
                            <a href="pages/formulario.php" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Registrarse / Create account </a>  
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>';
    }else{
        echo'<div class="navbar navbar-light bg-light"><h3>'.$_SESSION['usr'].'</h3></div><div class="collapse show bg-light" id="navbarHeader" style="">
        <div class="container-fluid containerMenuOption">
            <a class="menuOp" href="">menu option 1</a>
            <a class="menuOp" href="">menu option 2</a>
            <a class="menuOp" href="">menu option 3</a>
            <a class="menuOp" href="">menu option 4</a>
            <a class="menuOp" href="'.$homeRute.'/servicios/logout.php">logout</a>
        </div>
    </div>';
    }

    echo'
    <!-- Formulario Login -->
   	<div class="fondoFormLoginout inicioIinvisible">
   	    <div id="fondoFormLogin" class="fondoClickFormLoginin"></div>
   	    <div class="Animatedform">
            <label for="user">Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input id="colectUserInfoName" name="user" type="text"><br>
            <label for="pass">Contraseña</label>
            <input id="colectUserInfoPass" name="pass" type="password"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="sendInformationLogin" class="btn btn-primary" type="button" value="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="cancelFormLogin" class="btn btn-danger" type="button" value="cancel">
        </div>
   	</div>';

    if(isset($_GET['sts'])){
        echo $_GET['sts'];
    }
?>