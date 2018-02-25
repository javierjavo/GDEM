<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langHeader = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='home'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langHeader[]= $fila[$_SESSION['lang']];
}
echo '
        <nav aria-label="breadcrumb" role="navigation" class="bg-light">
          <ol class="breadcrumb" style="margin-bottom: 0px;">
            <li class="breadcrumb-item active" aria-current="page"><a class="textoDinamico" href="../index.php">Anterior</a></li>
            <li class="breadcrumb-item " aria-current="page"><a class="textoDinamico" href="../index.php">Anterior</a></li>
            <li class="breadcrumb-item active textoDinamico" aria-current="page">Actual</li>
          </ol>
        </nav>
    '
?>