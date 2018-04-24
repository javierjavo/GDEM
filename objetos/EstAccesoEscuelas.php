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
	<div class="container">
		<div class="cabecera">
			<h2>Que hacer para recibir ayuda por parte de probem</h2>
		</div>

		<ul class="cuerpo">
			<h3>Paso no. 1: Informacion y/o servicio que solicita</h3>
			<li>
				<ul>
					<li>
						<p>Docto. de Transformacion Estudiante Migrante Internacional</p>
					</li>
					<li>
						<p>Transcript y/o Report Card de E.U.A.</p>
					</li>
					<li>
						<p>Constancia y/o Parcial de Estudios en Mexico</p>
					</li>
					<li>
						<p>Duplicado Prim./Sec./Prep/Univ./...</p>
					</li>
				</ul>
			</li>
			
			<li>
				<ul>
					<p>Tambien puede preguntar acerca de:</p>
					<li>
						<p>La no perdida de nacionalidad</p>
					</li>
					<li>
						<p>El apostille</p>
					</li>
					<li>
						<p>La Legalizacion</p>
					</li>
					<li>
						<p>Acta Nacimiento</p>
					</li>
					<li>
						<p>CURP</p>
					</li>
				</ul>
			</li>
			
			<li>
				<ul>
					<p>Ademas de realizar la inscripcion a:</p>
					<li>
						<p>Preescolar</p>
					</li>
					<li>
						<p>Primaria</p>
					</li>
					<li>
						<p>Secundaria</p>
					</li>
					<li>
						<p>Preparatoria</p>
					</li>
					<li>
						<p>Eduacion Superior o Posgrados</p>
					</li>
				</ul>
			</li>
		</ul>

		<ul class="pie">
			<h3>Paso 2: Que necesito para llevar a cabo el proceso de inscripcion de mi hijo/a</h3>
			<li>
				<ul>
					<li>
						<p>Documento de Transferencia</p>
					</li>
					<li>
						<p>Tira de calificaciones, ya sea de Mexico, Estados Unidos, Canada o cualquier otra parte del mundo</p>
					</li>
					<li>
						<p>Una carta donde se demuestre el ultimo grado cursado o en curso de estudios</p>
					</li>
					<li>
						<p>Acta de Nacimiento ya sea de Mexico, Estados Unidos u otra</p>
					</li>
					<li>
						<p>Nacionalidad del interesado</p>
					</li>
					<li>
						<p>Apostille de Acta de Nacimiento, Transcript o Diploma</p>
					</li>
					<li>
						<p>Legalizacion de Acta de Nacimiento, Notas Escolares o Diploma</p>
					</li>
					<li>
						<p>Fotografias originales o escaneadas del interesado</p>
					</li>
				</ul>
			</li>
			<p>Presentar originales y 2 copias de cada uno si es posible, en caso de no contar con alguno de los anteriores, el asunto quedara a acordar en las oficinas del PROBEMJAL, si es posible utilizar los contactos que te dejamos <a href="#" target="_blank">aqui</a> para que te puedas comunicar y preguntar acerca de ello</p>
		</ul>
	</div>
	 '
?>