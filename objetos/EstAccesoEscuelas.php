<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langCapacitacion = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='acceso_escuelas'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langCapacitacion[]= $fila[$_SESSION['lang']];
}
//son 13 las de ivan
if($_SESSION['lang'] == es)
{
    echo '	
            <div class="col-md-12 iframe-directorio">
				<h2>¿C&oacutemo contin&uacuteo mis estudios?</h2>
				<iframe src="/GDEM/data-sources/data-accesoescuelas" class="iframe-style" frameborder="0" width="800" height="800"></iframe>
			</div>	
	';
} else if ($_SESSION['lang']== en){
    echo '
            <div class="col-md-12 iframe-directorio">
				<h2>How to continue my studies?</h2>
				<iframe src="/GDEM/data-sources/data-accesoescuelas-en" class="iframe-style" frameborder="0" width="800" height="800"></iframe>
            </div>
    '; 
}
	
?>