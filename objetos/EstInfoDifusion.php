<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langInfoDif = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='infoDifusion'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langInfoDif[]= $fila[$_SESSION['lang']];
}
echo '
       <div class="col-sm-6">
            <h2>'.$langInfoDif[0].'</h2>
            <p>'.$langInfoDif[1].'</p>
            <p>'.$langInfoDif[2].'</p>
            <p>'.$langInfoDif[3].'</p>
            <p>'.$langInfoDif[4].'</p>
            <p>'.$langInfoDif[5].'</p>
            <p>'.$langInfoDif[6].'</p>
            <p>'.$langInfoDif[7].'</p>
            <p>'.$langInfoDif[8].'</p>
            <p>'.$langInfoDif[9].'</p>
            <p>'.$langInfoDif[10].'</p>
            <p>'.$langInfoDif[11].'</p>
            <p>'.$langInfoDif[12].'</p>
            <p>'.$langInfoDif[13].'</p>
        </div>   
    '
?>