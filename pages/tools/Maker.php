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
                 <div class="row align-items-center justify-content-center bg-light"  style="min-height: 675px;">
                    
                    <div class="col-xs-12">
                        <button>Crear examen</button>
                    </div><br><br>
                    
                    <div class="col-xs-12">
                        <label>Nombre</label>
                        <input type="text"><br>
                        <label>Region</label>
                        <select>
                          <option value="volvo">M&eacute;xico</option>
                          <option value="saab">USA</option>
                        </select>
                        <button> Crear examen </button>
                    </div><br><br>
                    
                    <div class="col-xs-12">
                        <div id="cPregunta">
                            <label>Pregunta</label>
                            <input id="pregunta" type="text"><br>
                            <button onclick="addObj('#cPregunta');">añadir respuesta</button>
                            <button onclick="delObj('#cPregunta');">remover respuesta</button>
                        </div>
                            <input onclick="guardarObj(false);" type="button" value="nueva pregunta">
                            <input onclick="guardarObj(true);" type="button" value="finalizar">
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
