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
            <li class="breadcrumb-item active" aria-current="page"><a class="textoDinamico text-primary h4" href="../index.php">Anterior</a></li>
            <li class="breadcrumb-item " aria-current="page"><a class="textoDinamico text-primary h4" href="../index.php">Anterior</a></li>
            <li class="breadcrumb-item active textoDinamico h4" aria-current="page">Actual</li>
          </ol>
        </nav>
        </header>
            <!--Contenido de la pagina-->
        <main class="contenido" role="main">
             <section class="container" id="languajes" >
                 <div class="row align-items-center text-center justify-content-center bg-light"  style="min-height: 675px;">
                    <?php 
                        session_start();
                     if (isset($_SESSION['usr'])){
                         echo'
                         <div class="col-md-12">
                         <p class="display-4">Enlaces favoritos.</p><br>
                        ';
                        include "../objetos/fav_pag.php";
                     }
                     else {echo '<p class="display-4 text-center">Inicia sesion para ver los materiales.</p><a href="#" id="loginButton" class="btn btn-primary btn-m active" role="button" aria-pressed="true">Entrar a tu sesión / Login </a>
                            <a href="GDEM/pages/formulario.php" class="btn m-4 btn-secondary btn-m active" role="button" aria-pressed="true">Registrarse / Create account </a>  ';}
                     
                        
                     ?>
                 </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        loadTxt("accesoEscuelas");
        include"../objetos/pie.php";
        ?>
    </body>
