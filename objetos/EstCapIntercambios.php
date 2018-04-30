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
       <div class="contador parallax">
       	<div class="contenido">
            <ul class="sin-estilo">
                <li class="texto large-grid" style="text-align: center">
                    <h2>'.$langCapacitacion[0].'</h2>
            	</li><!--#talleres-->
            	<li class="texto small-grid">
                    <p>
                        '.$langCapacitacion[1].'

                    </p>
            	</li><!--#talleres-->
            	<li class="texto small-grid">
                    <p>
                         '.$langCapacitacion[2].'
                    </p>
            	</li><!--#talleres-->
            	<li class="texto small-grid">
                    <p>  '.$langCapacitacion[3].'</p>
            	</li><!--#talleres-->
            	<li class="texto large-grid">
                    <p>    '.$langCapacitacion[4].' </p>
            	</li><!--#talleres-->
            	<li class="texto medium-grid">
                    <p>
                         '.$langCapacitacion[5].'
                    </p>
            	</li><!--#talleres-->
                <li class="texto large-grid">
                    <p>    '.$langCapacitacion[6].' </p>
            	</li>
                
                <li class="texto small-grid">
                    <p>    '.$langCapacitacion[7].' </p>
            	</li>
                <li class="texto large-grid">
                    <p>    '.$langCapacitacion[8].' </p>
            	</li>
                
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[9].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[10].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[11].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[12].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[13].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[14].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[15].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[16].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langCapacitacion[17].' </p>
            	</li>
                
        	</ul>
    	</div>
	</div>     
    '
?>