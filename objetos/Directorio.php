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
			<div class="col-md-12">
				<p><i class="fas fa-address-book"></i>Directorio/Address Book</p>
				<table>
					<tr>
						<td><i class="fas fa-user"></i><p>Nombre/Name</p></td>
						<td><i class="fas fa-info-circle"></i><p>Cargo/Role</p></td>
						<td><i class="fas fa-address-card"></i><p>Direccion/Address</p></td>
						<td><i class="fas fa-phone"></i><p>Telefono/Phone Number</p></td>
						<td><i class="fas fa-at"></i><p>Correo/E-Mail</p></td>
					</tr>
					<tr>
						<td>
							<p>Pepito</p>
						</td>
						<td>
							<p>Admin</p>
						</td>
						<td>
							<p>Av. Telos Chupo #2345</p>
						</td>
						<td>
							<p>333-324-23</p>
						</td>
						<td>
							<p>sandi.mandi@gmail.com</p>
						</td>
					</tr>
                </table>
			</div>
	';
?>