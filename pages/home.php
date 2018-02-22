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
        </header>
           
            <!--Contenido de la pagina-->
        <main class="contenido" role="main">
             <section class="container" id="languajes" >
                 <div class="row align-items-center justify-content-center bg-light"  style="min-height: 675px;">
                    <?php 
                        include "../objetos/Probem.php"
                    ?>
                    <?php 
                        include "../objetos/ProbemObjetivos.php"
                    ?>
                    <?php 
                        include "../objetos/ProbemMisionVision.php"
                    ?>
                    <?php 
                        include "../objetos/ProbemHistoria.php"
                    ?>
                    
                    <?php 
                        include "../objetos/Directorio.php"
                    ?>
                    <?php 
                        include "../objetos/Contacto.php"
                    ?>
                    <h1 class="textoDinamico">titulo </h1>                    <h1 class="textoDinamico">titulo </h1>

                 </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        loadTxt("historia");
        include"../objetos/pie.php";
        ?>
    </body>
