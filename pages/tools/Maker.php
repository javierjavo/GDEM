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
