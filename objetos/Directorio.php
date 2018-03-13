<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langDirectorio = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='directorio'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langDirectorio[]= $fila[$_SESSION['lang']];
}
echo'
        <div class="col-md-12 align-items-center justify-content-center text-center">
        <legend class="text-center">'.$langDirectorio[6].'</legend>
        <table class="tabla_dir">
          <thead>
            <tr>
              <th>'.$langDirectorio[0].'</th>
              <th>'.$langDirectorio[1].'</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>'.$langDirectorio[2].'</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
            <tr>
              <td>'.$langDirectorio[3].'</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
            <tr>
              <td>'.$langDirectorio[4].'</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
            <tr>
              <td>'.$langDirectorio[5].'</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
          </tbody>
        </table>
        </div>
    ';
?>