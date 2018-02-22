<!DOCTYPE html>
<?php
    include "../servicios/lenguaje.php";
    //initStyles();
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
                   <div class="col-sm-6">
                        <h2 class="textoDinamico">Titulo</h2>
                        <p class="textoDinamico">p1</p>
                        <p class="textoDinamico">p2</p>
                        <p class="textoDinamico">p3</p>
                        <p class="textoDinamico">p4</p>
                        <p class="textoDinamico">p5</p>
                        <p class="textoDinamico">p6</p>
                        <p class="textoDinamico">p7</p>
                        <p class="textoDinamico">p8</p>
                        <p class="textoDinamico">p9</p>
                        <p class="textoDinamico">p10</p>
                        <p class="textoDinamico">p11</p>
                        <p class="textoDinamico">p12</p>
                        <p class="textoDinamico">p13</p>
                    </div>           
                 </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        loadTxt("infoDifusion");
        include"../objetos/pie.php";
        ?>
    </body>
