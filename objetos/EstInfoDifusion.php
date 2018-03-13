<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langInfoDif = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='infoDifusion'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langInfoDif[]= $fila[$_SESSION['lang']];
}
echo '
       <div class="col-sm-8 text-justify">
            <h2 class="text-center">'.$langInfoDif[0].'</h2>
            <div>
                <p>'.$langInfoDif[1].'</p>
            </div>
            <div>
                <p>'.$langInfoDif[2].'</p>
            </div>
            <div>
                <p>'.$langInfoDif[3].'</p>
            </div>
            <div>
            <p>'.$langInfoDif[4].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[5].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[6].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[7].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[8].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[9].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[10].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[11].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[12].'</p>
                </div>
                <div>
                    <p>'.$langInfoDif[13].'</p>
                </div>
        </div>   
        <div class="col-sm-4 text-justify">
                
        </div>
    '
?>