<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no" >
        <title>Home GDEM</title>
         <!-- Bootstrap CSS -->
         <?php
            include "../servicios/lenguaje.php";
            initStyles();
        ?>
    </head>
    <body class="fondoHome">
        <header  role="banner">
               <?php
                include"../objetos/header.php";
            ?>
            <!--Barra de seguimiento dentro del portal-->
        <nav aria-label="breadcrumb" role="navigation" class="bg-light">
          <ol class="breadcrumb" style="margin-bottom: 0px;">
            <li class="breadcrumb-item active" aria-current="page"><a class="h4 text-primary textoDinamico" href="../index.php">Bienvenido</a></li>
            <li class="breadcrumb-item active textoDinamico h4" aria-current="page">Inicio - Español</li>
          </ol>
        </nav>
        </header>
           
            <!--Contenido de la pagina-->
        <main class="contenido" role="main">
             <section class="container container-move" id="languajes" >
                 <div class="row align-items-center justify-content-center bg-light home_container">
                    <?php 
                        include "../objetos/Probem.php"
                    ?> 
                 </div>
            </section>
            <section class="container container-move" id="languajes" >
                 <div class="row align-items-center justify-content-center home_container">
                    <?php 
                        include "../objetos/ProbemObjetivos.php"
                    ?>
                 </div>
            </section>
            <section class="container container-move" id="languajes" >
                 <div class="row align-items-center justify-content-center bg-light home_container">
                    <?php 
                        include "../objetos/ProbemMisionVision.php"
                    ?>
                 </div>
            </section>
            <section class="container container-move" id="languajes" >
                 <div class="row align-items-center justify-content-center home_container">
                    <?php 
                        include "../objetos/ProbemHistoria.php"
                    ?>
                 </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        loadTxt("home");
        include"../objetos/pie.php";
        ?>
    </body>
