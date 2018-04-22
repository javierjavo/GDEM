<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langProbem = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='historia'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langProbem[]= $fila[$_SESSION['lang']];
}
echo'
               <div class="col-md-12">
               <h2> '.$langProbem[0].'</h2>
                 '.$langProbem[1].' 
               </div>
               <div class="col-md-12 text-center">
                    <img class="img-fluid" src="'.$homeRute.'/media/historia.jpg" alt="Logo_GDEM"><br>
                </form>
               </div>
    ';
?>