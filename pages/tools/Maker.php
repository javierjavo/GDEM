<!DOCTYPE html>
<?php
    include "../../servicios/lenguaje.php";
    initStyles();
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no" >
        <title>Home GDEM</title>
         <!-- Bootstrap CSS -->
    </head>
    <body class="fondoHome">
        <header  role="banner">
            <?php
                include"../../objetos/header.php";
            ?>
            <!--Barra de seguimiento dentro del portal-->
        <nav aria-label="breadcrumb" role="navigation" class="bg-light">
          <ol class="breadcrumb" style="margin-bottom: 0px;">
            <li class="breadcrumb-item active" aria-current="page"><a class="textoDinamico" href="../index.php">Bienvenido</a></li>
            <li class="breadcrumb-item active textoDinamico" aria-current="page">Inicio - Español</li>
          </ol>
        </nav>
        </header>
           
            <!--Contenido de la pagina-->
        <main class="contenido" role="main">
             <section class="container" id="languajes" >
                 <div class="row text-center align-items-center bg-light"  style="min-height: 675px;">
                   <div class="inicioIinvisible">
                        <div id="fondoFormLogin2" class="fondoClickFormLoginin"></div>
                        <div class="Animatedform text-center align-items-center">
                            <input id="loginButton3" class="m-3 btn btn-primary" type="button" value="Comenzar">
                            <input id="cancelFormLogin2" class="m-3 btn btn-danger" type="button" value="cancel">
                        </div>
                    </div>
                    <div class="inicioIinvisible">
                        <div id="fondoFormLogin3" class="fondoClickFormLoginin"></div>
                        <div class="Animatedform text-center align-items-center">
                            <label>Nombre</label>
                            <input type="text" id='actname'><br>
                            <label>Tipo</label>
                            <select id='tipo'>
                              <option value="tipo1">Examen Basico</option>
                              <option value="tipo2">Examen con ejercicios practicos</option>
                            </select><br>
                            <label>Region</label>
                            <select id='region'>
                              <option value="mx">M&eacute;xico</option>
                              <option value="usa">USA</option>
                            </select><br>
                            <input id="loginButton4" class="m-3 btn btn-primary" type="button" value="Siguiente">
                            <input id="cancelFormLogin3" class="m-3 btn btn-danger" type="button" value="Cancelar">
                        </div>
                    </div>
                    <div class="inicioIinvisible">
                        <div id="fondoFormLogin4" class="fondoClickFormLoginin"></div>
                        <div class="Animatedform text-center align-items-center">
                            <div id="cPregunta">
                            <label>Pregunta</label>
                            <input id="pregunta" type="text"><br>
                            <button class="btn btn-secondary" onclick="addObj('#cPregunta');">añadir respuesta</button>
                            <button class="btn btn-danger" onclick="delObj('#cPregunta');">remover respuesta</button>
                        </div>
                            <input class="btn btn-secondary" onclick="guardarObj(false);" type="button" value="nueva pregunta">
                            <input class="btn btn-success" onclick="guardarObj(true);" type="button" value="finalizar">
                            <input id="loginButton4" class="m-3 btn btn-primary" type="button" value="Comenzar">
                            <input id="cancelFormLogin4" class="m-3 btn btn-danger" type="button" value="cancel">
                        </div>
                    </div>
                    <?php 
                        session_start();
                     if (isset($_SESSION['usr'])){
                         echo'
                         <div class="col-md-12">
                         <p class="display-4">Examenes disponibles.</p><br>
                        <a href="#" id="loginButton2" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Crear nuevo examen</a>
                        </div><br><br>';
                        include "exam_list.php";
                     }
                     else {echo '<p class="display-4 text-center">Inicia sesion para ver los materiales.</p><a href="#" id="loginButton" class="btn btn-primary btn-m active" role="button" aria-pressed="true">Entrar a tu sesión / Login </a>
                            <a href="GDEM/pages/formulario.php" class="btn m-4 btn-secondary btn-m active" role="button" aria-pressed="true">Registrarse / Create account </a>  ';}
                     
                        
                     ?>
                    
                 </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        loadTxt("home");
        include"../../objetos/pie.php";
        ?>
    </body>
