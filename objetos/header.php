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
                        <a class="nav-link" href="home.php">Inicio<span class="sr-only">(current)</span></a>
                      </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          PROBEMJal
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a href="#" class="dropdown-header btn">PROBEM en México</a>
                          <a class="dropdown-item" href="#">¿Que es PROBEMJAL?</a>
                          <a class="dropdown-item" href="#">Historia</a>
                          <a class="dropdown-item" href="#">Objetivos</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Estudiantes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a href="#" class="dropdown-header btn">Ejes Tematicos</a>
                          <a class="dropdown-item" href="#">Información y Difusión</a>
                          <a class="dropdown-item" href="#">Acceso a las Escuelas</a>
                          <a class="dropdown-item" href="#">Apoyps Educativos</a>
                          <a class="dropdown-item" href="#">Capacitación e Intercambio</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Maestros
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a href="#" class="dropdown-header btn">Ejes Tematicos</a>
                          <a class="dropdown-item" href="#">Información y Difusión</a>
                          <a class="dropdown-item" href="#">Acceso a las Escuelas</a>
                          <a class="dropdown-item" href="#">Apoyps Educativos</a>
                          <a class="dropdown-item" href="#">Capacitación e Intercambio</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Casos de exito</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Directorio PROBEM</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contactanos</a>
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
            <li class="breadcrumb-item active" aria-current="page"><a href="../index.php">Bienvenido</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inicio - Español</li>
          </ol>
        </nav>