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
               <div class="col-md-11 my-2 bg-light">
               <h1 class="text-center"> '.$langProbem[0].'</h1>
                 <p class="text-justify">'.$langProbem[1].'</p>
               </div>
               <div class="col-md-5 bg-light my-2 text-center">
                    <img class="img-fluid" src="'.$homeRute.'/media/historia.jpg" alt="Logo_GDEM"><br>
                </form>
               </div>
    ';
?>