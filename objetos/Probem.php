<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langProbem = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='que'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langProbem[]= $fila[$_SESSION['lang']];
}
echo'
                <div class="col-md-6">
                   <h2>'.$langProbem[1].'</h2>
                   <p>'.$langProbem[0].'</p>
               </div>
               <div class="col-md-6">
                   <img class="img-fluid" src="'.$homeRute.'/media/que_es.jpg" alt="Logo_GDEM">
               </div>
               
    ';
?>