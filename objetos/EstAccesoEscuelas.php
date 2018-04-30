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
echo '
	<ul class="sin-estilo">
				<li class="texto large-grid">
					<h2>'.$langCapacitacion[0].'</h2>
					<p>'.$langCapacitacion[1].'</p>
					<p>'.$langCapacitacion[2].'</p>
					<p>'.$langCapacitacion[3].'</p>
					<p>'.$langCapacitacion[4].'</p>
					<p>'.$langCapacitacion[5].'</p>
					<p>'.$langCapacitacion[6].'</p>
					<p>'.$langCapacitacion[7].'</p>
					<p>'.$langCapacitacion[8].'</p>
					<p>'.$langCapacitacion[9].'</p>
				</li>
                <li class="texto large-grid">
                    <div class="container">
                        <div class="cabecera">
                            <h2>'.$langCapacitacion[10].'</h2>
                        </div>

                        <ul class="cuerpo">
                            <h3>'.$langCapacitacion[11].'</h3>
                            <li>
                                <ul>
                                    <li>
                                        <p>'.$langCapacitacion[12].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[13].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[14].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[15].'</p>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <ul>
                                    <p>'.$langCapacitacion[16].'</p>
                                    <li>
                                        <p>'.$langCapacitacion[17].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[18].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[19].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[20].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[21].'</p>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <ul>
                                    <p>'.$langCapacitacion[22].'</p>
                                    <li>
                                        <p>'.$langCapacitacion[23].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[24].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[25].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[26].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[27].'</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="pie">
                            <h3>'.$langCapacitacion[28].'</h3>
                            <li>
                                <ul>
                                    <li>
                                        <p>'.$langCapacitacion[29].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[30].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[31].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[32].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[33].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[34].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[35].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[36].'</p>
                                    </li>
                                </ul>
                            </li>
                            <p>'.$langCapacitacion[37].'&nbsp<a href="#" target="_blank">'.$langCapacitacion[38].'</a>&nbsp'.$langCapacitacion[39].'</p>
                        </ul>
                    </div>
            	</li><!--#talleres-->
        	</ul>
	 '
?>