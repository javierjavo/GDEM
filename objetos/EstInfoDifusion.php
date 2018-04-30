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
     <div class="contador parallax">
       	<div class="contenido">
            <ul class="sin-estilo">
                <li class="texto large-grid" style="text-align: center">
                    <h2>'.$langInfoDif[0].'</h2>
            	</li><!--#talleres-->
            	<li class="texto small-grid">
                    <p>
                        '.$langInfoDif[1].'

                    </p>
            	</li><!--#talleres-->
            	<li class="texto small-grid">
                    <p>
                         '.$langInfoDif[2].'
                    </p>
            	</li><!--#talleres-->
            	<li class="texto small-grid">
                    <p>  '.$langInfoDif[3].'</p>
            	</li><!--#talleres-->
            	<li class="texto large-grid">
                    <p>    '.$langInfoDif[4].' </p>
            	</li><!--#talleres-->
            	<li class="texto medium-grid">
                    <p>
                         '.$langInfoDif[1].'
                    </p>
            	</li><!--#talleres-->
                <li class="texto large-grid">
                    <p>    '.$langInfoDif[4].' </p>
            	</li>
                
                <li class="texto small-grid">
                    <p>    '.$langInfoDif[5].' </p>
            	</li>
                <li class="texto large-grid">
                    <p>    '.$langInfoDif[6].' </p>
            	</li>
                
                <li class="texto medium-grid">
                    <p>    '.$langInfoDif[7].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langInfoDif[8].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langInfoDif[9].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langInfoDif[10].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langInfoDif[11].' </p>
            	</li>
                <li class="texto medium-grid">
                    <p>    '.$langInfoDif[12].' </p>
            	</li>
               
        	</ul>
    	</div>
	</div>  
'
?>