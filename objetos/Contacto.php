<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langContacto = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='contacto'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langContacto[]= $fila[$_SESSION['lang']];
}
echo'
		<div class="c-container">
			<div class="c-redes-sociales" style="background-color: black; text-align: center;">
				<p style="color: white;">Consulta nuestras redes sociales</p>
				<a href="#"><i class="fab fa-facebook-f" style="color: #CE8227; font-size: 2em; padding: 0 15px;"></i></a>
				<a href="#"><i class="fab fa-twitter" style="color: #CE8227; font-size: 2em; padding: 0 15px"></i></a>

			</div><!--Redes sociales-->

			<div class="c-contacto">
				<p>Nuestros horarios: 9:00am a 5pm</p><br>
				<p>Telefonos Oficina: (044) 334-435-43</p>
				<p>Si llamas desde fuera del pais marca: (011), ahora marca 52, teclea 1 se llamas a celular y 2 si es a telefono fijo.<br> Ahora marca el telefono siguiente:<br>334-435-43</p>
				<p><i class="fab fa-whatsapp" style="color: #CE8227; font-size: 2em; padding: 0 15px"></i>Whatsapp: 33-122-123-43</p>
				<p><i class="fas fa-envelope" style="color: #CE8227; font-size: 2em; padding: 0 15px"></i>Correo: probemsej@jalisco.gob.mx</p>
			</div>
		</div>
	';
?>