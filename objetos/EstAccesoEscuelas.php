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
	<ul class="sin-estilo">
                <li class="texto large-grid" style="text-align: center">
                    <div class="container">
                        <div class="cabecera">
                            <h2>'.$langCapacitacion[0].'</h2>
                        </div>

                        <ul class="cuerpo">
                            <h3>'.$langCapacitacion[1].'</h3>
                            <li>
                                <ul>
                                    <li>
                                        <p>'.$langCapacitacion[2].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[3].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[4].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[5].'</p>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <ul>
                                    <p>'.$langCapacitacion[6].'</p>
                                    <li>
                                        <p>'.$langCapacitacion[7].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[8].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[9].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[10].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[11].'</p>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <ul>
                                    <p>'.$langCapacitacion[12].'</p>
                                    <li>
                                        <p>'.$langCapacitacion[13].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[14].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[15].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[16].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[17].'</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="pie">
                            <h3>'.$langCapacitacion[18].'</h3>
                            <li>
                                <ul>
                                    <li>
                                        <p>'.$langCapacitacion[19].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[20].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[21].'</p>
                                    </li>
                                    <li>
                                        <p>'.$langCapacitacion[22].'</p>
                                    </li>
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
                                </ul>
                            </li>
                            <p>'.$langCapacitacion[27].'<a href="#" target="_blank">aqui</a> '.$langCapacitacion[28].'</p>
                        </ul>
                    </div>
            	</li><!--#talleres-->
        	</ul>
	 '
?>