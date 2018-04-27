<!DOCTYPE html>
<?php
    include "../servicios/lenguaje.php";
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
                include"../objetos/header.php";
            ?>
            <!--Barra de seguimiento dentro del portal-->
        <nav aria-label="breadcrumb" role="navigation" class="bg-light">
          <ol class="breadcrumb" style="margin-bottom: 0px;">
            <li class="breadcrumb-item active" aria-current="page"><a class="textoDinamico h4 text-primary" href="../index.php">Anterior</a></li>
            <li class="breadcrumb-item " aria-current="page"><a class="textoDinamico h4 text-primary" href="../index.php">Anterior</a></li>
            <li class="breadcrumb-item active textoDinamico h4" aria-current="page">Actual</li>
          </ol>
        </nav>
        </header>
            <!--Contenido de la pagina-->
        <main class="contenido" role="main">
             <section class="container container-move" id="languajes" >
                 <div class="row align-items-center justify-content-center bg-light"  style="min-height: 675px;">
                    <?php 
                        include "../objetos/ProbemHistoria.php"
                    ?>
                 </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        loadTxt("infoDifusionPage");
        include"../objetos/pie.php";
        ?>
    </body>
