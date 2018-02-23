<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
include "loginStatus.php"; 
session_start();
$langHeader = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='header'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langHeader[]= $fila[$_SESSION['lang']];
}
echo '
       <!-- Barra de navegación principal-->
        <nav class="navbar navbar-light bg-light">
            <div class="col-sm-1 py-4">
                <img class="img-fluid" src="'.$homeRute.'/Media/Logo_probem.png" alt="Logo_GDEM">
            </div>
           <div class="col-sm-1"><a href="'.$homeRute.'" class="navbar-brand">GDEM</a></div>
           <div class="col-sm-8 text-center">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">'.$langHeader[0].'<span class="sr-only">(current)</span></a>
                      </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          PROBEMJal
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a href="#" class="dropdown-header btn">PROBEMJal</a>
                          <a class="dropdown-item" href="/GDEM/pages/quePROBEM.php">'.$langHeader[1].'</a>
                          <a class="dropdown-item" href="/GDEM/pages/historiaPROBEM.php">'.$langHeader[2].'</a>
                          <a class="dropdown-item" href="/GDEM/pages/objetivosPROBEM.php">'.$langHeader[3].'</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          '.$langHeader[4].'
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a href="#" class="dropdown-header btn">'.$langHeader[5].'</a>
                          <a class="dropdown-item" href="/GDEM/pages/informacionDifusion.php">'.$langHeader[6].'</a>
                          <a class="dropdown-item" href="/GDEM/pages/accesoEscuelas.php">'.$langHeader[7].'</a>
                          <a class="dropdown-item" href="/GDEM/pages/apoyosEducativos.php">'.$langHeader[8].'</a>
                          <a class="dropdown-item" href="/GDEM/pages/capacitacionIntercambios.php">'.$langHeader[9].'</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/GDEM/pages/casosExito.php">'.$langHeader[11].'</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/GDEM/pages/directorioPROBEM.php">'.$langHeader[12].'</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/GDEM/pages/contacto.php">'.$langHeader[13].'</a>
                      </li>
                    </ul>
                  </div>
                </nav>
           </div>
           <div class="col-sm-2">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
                <span >'.$langHeader[14].'</span>
            </button>
           </div>
        </nav>
            
    '
?>