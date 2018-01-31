<?php
$homeRute = "/GDEM";
include "loginStatus.php";

?>    
       <!-- Barra de navegación principal-->
        <nav class="navbar navbar-light bg-light">
            <div class="col-sm-1 py-4">
                <img class="img-fluid" src="<?php echo $homeRute?>/Media/Logo_probem.png" alt="Logo_GDEM">
            </div>
           <div class="col-sm-1"><a href="<?php echo $homeRute?>" class="navbar-brand">GDEM</a></div>
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
            <li class="breadcrumb-item active" aria-current="page"><a href="../index.html">Bienvenido</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inicio - Español</li>
          </ol>
        </nav>