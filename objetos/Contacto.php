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
               <div class="col-md-12 text-center contacto">
                   <form action="../servicios/insertar.php" class="login" method="post">
                    <fieldset>
                      <legend>'.$langContacto[0].'</legend>
                       <label for="nombre"> '.$langContacto[1].':
                        <input type="text" name="nombre" id="nombre" placeholder="'.$langContacto[1].'" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="estado"> '.$langContacto[2].':
                        <input type="text" name="estado" id="estado" placeholder="'.$langContacto[2].'" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="comentarios"> '.$langContacto[3].':
                        <input type="text" name="comentarios" id="comentarios" placeholder="'.$langContacto[3].'" autocomplete="on" required>
                        </label>
                        <br>
                        <input class="btn btn-primary" name="submit" type="submit" id="boton" value="'.$langContacto[4].'" class="boton" onClick=""/>
                    </fieldset>
                </form>
               </div>
    ';
?>