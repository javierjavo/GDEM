<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langProbem = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='misionVision'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langProbem[]= $fila[$_SESSION['lang']];
}
echo'
               <div class="col-md-4">
                   <h2>' . $langProbem[0] . '</h2>
                   <p> '. $langProbem[1] . $langProbem[2] . $langProbem[3] .$langProbem[4] .' </p>
               </div>
               <div class="col-md-4 text-center">
                   <img class="img-fluid" src="'.$homeRute.'/media/Misin-vision-valores.jpg" alt="Logo_GDEM"><br>
                   <a href="#" class="btn btn-primary">Valores y el camino del PROBEMJAL</a>
               </div>
               <div class="col-md-4">
                   <h2>' . $langProbem[5] . '</h2>
                   <p> '. $langProbem[6]. ' </p>
               </div>
    ';
?>