<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no" >
    <title>Home GDEM</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body style="min-height: 400px; background-size:cover; background: url('media/together.jpg') no-repeat center center fixed; height: 50%;">
    <header  role="banner">
    <!-- Barra Principal desplegable-->
   	<?php 
        include"servicios/loginStatus.php"; 
    ?>
    <!-- Barra de navegación principal-->
    <nav class="navbar navbar-light bg-light">
        <div class="col-sm-1 py-4">
            <img class="img-fluid" src="media/Logo_probem.png" alt="Logo_GDEM">
        </div>
       <div class="col-sm-1"><a href="index.php" class="navbar-brand">GDEM</a></div>
       <div class="col-sm-8 text-center">
       <!-- Aqui va el menú de navegación-->
       </div>
       <div class="col-sm-2">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
            <span >Mostrar / Ocultar</span>
        </button>
       </div>
    </nav>
    <!--Barra de seguimiento dentro del portal-->
    <nav aria-label="breadcrumb" role="navigation" class="bg-light">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Bienvenida/welcome</li>
      </ol>
    </nav>
   	</header>
   	<!-- Formulario Login -->
   	<div class="fondoFormLoginout inicioIinvisible">
   	    <div id="fondoFormLogin" class="fondoClickFormLoginin"></div>
   	    <div class="Animatedform">
            <label for="user">Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input id="colectUserInfoName" name="user" type="text"><br>
            <label for="pass">Contraseña</label>
            <input id="colectUserInfoPass" name="pass" type="password"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="sendInformationLogin" class="btn btn-primary" type="button" value="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="cancelFormLogin" class="btn btn-danger" type="button" value="cancel">
        </div>
   	</div>
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
    <footer class="footer bg-light" role="contentinfo" >
       <div class="container-fluid">
          <div class="row align-items-center">
              <div class="col align-self-center text-center"><a href="#">Aviso De Privacidad / Private Policy</a></div>
              <div class="col text-center"><p>Todos los derechos reservados &copy; <br> Ivan Antonio Oviedo Galvan <br>Carlos Ignacio Valdez Aguilar <br>Jose Ignacio Sanchez Anguiano </p></div>
          </div>         
       </div>
        </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>