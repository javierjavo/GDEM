<!DOCTYPE html>
<?php
    include "../servicios/lenguaje.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no" >
    <title>Home GDEM</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body style="min-height: 400px; background-size:cover; background: url('../../Media/together.jpg') no-repeat center center fixed; height: 50%;">
    <header  role="banner">
   	<div class="collapse show bg-light" id="navbarHeader" style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 py-4">
                  <img class="img-fluid" src="../../Media/Logo_probem.png" alt="Logo_GDEM">
                </div>
                <div class="col-sm-6 py-4">
                  <h3 class="text-center">GDEM</h3>
                  <p class="text-center">Guia Digital de Educación al Migrante / National Digital Guide for Migrants</p>  
                </div>
                <div class="col-sm-4 py-4 text-center">
                    <h5>¿Ya tienes cuenta? / Do you have an account?</h5>
                    <a href="" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Entrar a tu sesión / Login </a>
                    <a href="registro.html" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Registrarse / Create account </a>
                </div>
            </div>
        </div>
    </div>
        <!-- Barra de navegación principal-->
    <nav class="navbar navbar-light bg-light">
      <div class="col-sm-1 py-4">
                  <img class="img-fluid" src="../../Media/Logo_probem.png" alt="Logo_GDEM">
                </div>
       <div class="col-sm-1"><a href="../index.php" class="navbar-brand">GDEM</a></div>
       <div class="col-sm-8 text-center">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Inicio<span class="sr-only">(current)</span></a>
                  </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      PROBEM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a href="probem.html" class="dropdown-header btn">PROBEM</a>
                      <a class="dropdown-item" href="probem/acerca_probem.html">¿Que es PROBEMJAL?</a>
                      <a class="dropdown-item" href="probem/historia.html">Historia</a>
                      <a class="dropdown-item" href="probem/mision_vision.html">Misión y Visión</a>                      
                      <a class="dropdown-item" href="probem/objetivos.html">Objetivos</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tramites
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a href="tramites.html" class="dropdown-header btn">Tramites</a>
                      <a class="dropdown-item" href="tramites/maestros.html">Sección de Maestros</a>
                      <a class="dropdown-item" href="tramites/alumnos.html">Sección de Alumnos</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Recursos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a href="recursos.html" class="dropdown-header btn">Recursos</a>
                      <a class="dropdown-item" href="recursos/actividades.html">Actividades</a>
                      <a class="dropdown-item" href="recursos/multimedia.html">Multimedia</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Muro de noticias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a href="muro.html" class="dropdown-header btn">Muro de noticias</a>
                      <a class="dropdown-item" href="muro/maestros.html">Sección de Maestros</a>
                      <a class="dropdown-item" href="muro/alumnos.html">Sección de Alumnos</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="casos_exito.html">Casos de exito</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contactanos.html">Contactanos</a>
                  </li>
                </ul>
              </div>
            </nav>
       </div>
       <div class="col-sm-2">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
            <span >Mostrar / Ocultar</span>
        </button>
       </div>
    </nav>
        <!--Barra de seguimiento dentro del portal-->
    <nav aria-label="breadcrumb" role="navigation" class="bg-light">
      <ol class="breadcrumb" style="margin-bottom: 0px;">
        <li class="breadcrumb-item active" aria-current="page"><a href="../../index.html">Bienvenido</a></li>
        <li class="breadcrumb-item active" aria-current="page">Inicio - Español</li>
      </ol>
    </nav>
   	</header>
   	   	<!--Contenido de la pagina-->
	<main class="contenido" role="main">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border: 3px;">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" style="max-height:400px;" src="../../Media/board3.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block " style="background-color: rgba(10,10,10,.5);  border-radius: 5px;">
                <h3>¡Conoce acerca del PROBEM y todo lo que tiene a ofrecer para ti!</h3>
                <p>La coordinación del PROBEM es la encargada de ofreces y facilitar bajo el sustento de la SEP...</p>
                <a href="probem.html" class="btn btn-primary">Entra aqui para conocer más</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="max-height:400px;" src="../../Media/board2.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(10,10,10,.5);  border-radius: 5px;">
                <h3>¡Adelante llena este formulario y encuentras las respuestas que buscas!</h3>
                <p>Contesta un pequeño formulario para conocer escuelas cerca de tu domicilio, tramites de tu interes y mas...(descuida no necesitamos datos confidenciales)</p>
                <a href="formulario.html" class="btn btn-primary">Contestar Formulario</a>
              </div>              
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="max-height:400px;" src="../../Media/board.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(10,10,10,.5);  border-radius: 5px;">
                <h3>¡Conoce acerca del PROBEM y todo lo que tiene a ofrecer para ti!</h3>
                <p>La coordinación del PROBEM es la encargada de ofreces y facilitar bajo el sustento de la SEP...</p>
                <a href="probem.html" class="btn btn-primary">Entra aqui para conocer más</a>
              </div>              
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
		<section class="container" id="languajes" >
            <div class="row align-items-center"  style="min-height: 675px;">
                <div class="col text-center"><button class="btn btn-lg btn-primary">Tramites</button></div>
                <div class="col text-center"> <img src="../../Media/choice.jpg" alt="" class="rounded img-fluid"></div>
                <div class="col text-center"><button class="btn btn-lg btn-primary">Recursos</button></div>
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
</body>
</html>