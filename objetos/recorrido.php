<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langHeader = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='header'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langHeader[]= $fila[$_SESSION['lang']];
}
echo '
        
    '
?>