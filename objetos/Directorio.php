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
			<div class="col-md-12 iframe-directorio">
				<h2>Directorio</h2>
				<iframe src="/GDEM/data-sources/data-directorio" class="iframe-style" frameborder="0" width="800" height="500"></iframe>
			</div>
	';
?>