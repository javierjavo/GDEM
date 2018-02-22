<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langProbem = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='objetivo'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langProbem[]= $fila[$_SESSION['lang']];
}
echo'
               <div class="col-md-6">
                  <h2> '.$langProbem[0].' </h2>
                  <p> '.$langProbem[2].'</p>
                  
               </div>
               <div class="col-md-6">
                   <h2> '.$langProbem[1].' </h2>
                  <p> '.$langProbem[3].'</p>
                  <p> '.$langProbem[4].'</p>
                  <p> '.$langProbem[5].'</p>
                  <p> '.$langProbem[6].'</p>
                  <p> '.$langProbem[7].'</p>
                  <p> '.$langProbem[8].'</p>
               </div>
    ';
?>