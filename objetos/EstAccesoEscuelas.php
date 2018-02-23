<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langCapacitacion = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='capacitacion'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langCapacitacion[]= $fila[$_SESSION['lang']];
}
echo '
       <div class="col-sm-6">
            <h2>'.$langCapacitacion[0].'</h2>
            <p>'.$langCapacitacion[1].'</p>
            <h2>'.$langCapacitacion[2].'</h2>
            <p>'.$langCapacitacion[3].'</p>
            <p>'.$langCapacitacion[4].'</p>
            <p>'.$langCapacitacion[5].'</p>
            <p>'.$langCapacitacion[6].'</p>
            <p>'.$langCapacitacion[7].'</p>
            <p>'.$langCapacitacion[8].'</p>
            <p>'.$langCapacitacion[9].'</p>
            <p>'.$langCapacitacion[10].'</p>
            <p>'.$langCapacitacion[11].'</p>
            <p>'.$langCapacitacion[12].'</p>
            <p>'.$langCapacitacion[13].'</p>
            <p>'.$langCapacitacion[14].'</p>
            <p>'.$langCapacitacion[15].'</p>
            <p>'.$langCapacitacion[16].'</p>
            <p>'.$langCapacitacion[17].'</p>
            <p>'.$langCapacitacion[18].'</p>
            
        </div>   
    '
?>