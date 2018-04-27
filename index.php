<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no" >
    <title>Home GDEM</title>
     <!-- Bootstrap CSS -->
    <?php 
        include "servicios/lenguaje.php";
        initStyles();
        //httpsRequest("https://www.google.com");
    ?>
</head>
<body class="fondoHome">
    <header  role="banner">
    <!-- Barra Principal desplegable-->
   	<?php 
        include"objetos/loginStatus.php"; 
    ?>
    <!-- Barra de navegación principal-->
    <nav class="navbar navbar-light bg-light">
        <div class="col-sm-3 py-4">
            <img class="img-fluid" src="media/sep.png" alt="Logo_GDEM">
        </div>
       <div class="col-sm-3 py-4">
            <img class="img-fluid" src="media/jalisco.jpg" alt="Logo_GDEM">
        </div>
       <div class="col-sm-3 py-4">
            <img class="img-fluid" src="media/Logo_probem.png" alt="Logo_GDEM">
        </div>
       <div class="col-sm-2 text-cen">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
            <span class="textoDinamico">Mostrar / Ocultar</span>
        </button>
       </div>
    </nav>
    <!--Barra de seguimiento dentro del portal-->
    <nav aria-label="breadcrumb" role="navigation" class="bg-light">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active textoDinamico h4" aria-current="page">Bienvenida/welcome</li>
      </ol>
    </nav>
   	</header>
   	
   	<!--Contenido de la pagina-->
	<main class="contenido" role="main">
        
		<section class="container" id="languajes" >
            <div class="row align-items-center" style="min-height: 675px;">
                <div class="col text-center"><a href="pages/home.php?lang=es" class="btn btn-lg btn-primary btn-lang">Español</a></div>
                <div class="col text-center"> <img src="media/Logo_ceti.png" alt="" class="img-fluid cetiLogo"></div>
                <div class="col text-center"><a href="pages/home.php?lang=en" class="btn btn-lg btn-primary btn-lang">English</a></div>
            </div>
            
		</section>
	</main>
      <!--Footer de la pagina -->
    <?php
        loadTxt("index");
        include "objetos/pie.php";
    ?>
</body>
</html>