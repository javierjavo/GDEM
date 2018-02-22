<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langDirectorio = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='pie'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langDirectorio[]= $fila[$_SESSION['lang']];
}
echo'
        <table class="text-center">
          <thead>
            <tr>
              <th>Cargo / Position</th>
              <th>Información de contacto / Contact information</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jefe del departamento PROBEM México</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
            <tr>
              <td>Jefe del departamento PROBEM México</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
            <tr>
              <td>Jefe del departamento PROBEM México</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
            <tr>
              <td>Jefe del departamento PROBEM México</td>
              <td>Tel. 3315952876 Cel. 33144112221</td>
            </tr>
          </tbody>
        </table>
    ';
?>