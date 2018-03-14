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
                   
                    <div class="col-sm-6 py-4">
                            <img class="img-fluid" src="/GDEM/media/niños_lapiz.jpg" alt="Logo_GDEM">
                            <a href="#" id="loginButton" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Entrar a tu sesión / Login </a>
                            <a href="/GDEM/pages/formulario.php" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Registrarse / Create account </a>  
                    </div>
                    <!-- Formulario Login -->
                    <div class="fondoFormLoginout inicioIinvisible">
                        <div id="fondoFormLogin2" class="fondoClickFormLoginin"></div>
                        <div class="Animatedform">
                            <label for="user">Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input id="colectUserInfoName" name="user" type="text"><br>
                            <label for="pass">Contraseña</label>
                            <input id="colectUserInfoPass" name="pass" type="password"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="sendInformationLogin" class="btn btn-primary" type="button" value="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="cancelFormLogin" class="btn btn-danger" type="button" value="cancel">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <button class="btn btn-primary">Crear examen</button>
                    </div><br><br>
                    
                    <div class="col-md-12">
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
                        <button class="btn btn-primary"> Crear examen </button>
                    </div><br><br>
                    
                    <div class="col-md-12">
                        <div id="cPregunta">
                            <label>Pregunta</label>
                            <input id="pregunta" type="text"><br>
                            <button class="btn btn-secondary" onclick="addObj('#cPregunta');">añadir respuesta</button>
                            <button class="btn btn-danger" onclick="delObj('#cPregunta');">remover respuesta</button>
                        </div>
                            <input class="btn btn-secondary" onclick="guardarObj(false);" type="button" value="nueva pregunta">
                            <input class="btn btn-success" onclick="guardarObj(true);" type="button" value="finalizar">
                    </div>
                    <lavel id="resultado"></lavel>
                 </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        loadTxt("home");
        include"../../objetos/pie.php";
        ?>
    </body>
