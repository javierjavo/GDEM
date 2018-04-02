<script
  src="../js/jquery-3.2.1.min.js"></script>
<style>
<style>
    .titulo2 {
            font-family: Arial, Helvetica, sans-serif;
          font-size:size:60px;
          color: rgb(100,50,80);
        }
        .titulo {
          font-family: Arial, Helvetica, sans-serif;
          font-size: 16px;
          color: #900;
        }
        .small{
          font-family: Arial, Helvetica, sans-serif;
          font-size: 14px;
          color: #900;
        }
        a {
          font-family: Arial, Helvetica, sans-serif;
          font-size: 20px;
          color: #555;
                text-decoration: none;

        }
        a:visited {
          color: #666;
          text-decoration: none;
        }
        a:hover {
          color: #900;
          text-decoration: none;
        }
        a:link {
          text-decoration: none;
        }
        a:active {
          text-decoration: none;
        }
    .MainInformation{
        position: relative;
        overflow-x: hidden;
        margin-top: 10px;
    }
    .topYearNav{
        width: 100%;
        height: 100%;
    }
    .yearNavigator{
        position: relative;
        top: 10px;        width: 100%;
        height: 100px;
    }
    .yearselector{
        position: relative;
        background-color: rgba(30, 95, 159, 0.9);
        width: 150px;
        height: 100px;
        margin-bottom: 10px;
        margin-left: 10px;
        border-radius: 5px;
        transition: all .5s ease;
        float: left;
    }
    .yearselector:hover{
        background-color: rgba(21, 68, 114, 1);
        cursor:pointer;
    }
    .titleYear{
        position: relative;
        text-align: center;
        top: 40px;
        font-size: 20px;
        color: azure;
    }
    .contenedor-principal{
        width: 100%;
        box-sizing: border-box;
    }
    .content{
        position: relative;
        background-color: transparent;
        float: left;
        top: 10px;
        margin-left: 10px;
        display: none;
    }
    .subFiltro{
        position: relative;
        width: auto;
        height: 100px;
        background-color: rgba(30, 95, 159, 0.9);
        margin-left: 10px;
        padding-top: 40px;
        text-align: center;
        color: azure;
        font-size: 20px;
        display: block;
    }
    .subFiltro:hover{
        background-color: rgba(21, 68, 114, 1);
    }
    .info-sub-item{
        display: block;
    }
    .subcontent{
        display: block;
    }
    .colapsado{
        display: none;
    }
    .contentxt{
        position: relative;
        font-size: 10px;
        left: 30px;
    }
</style>

<?php
$titulos[] = null;
function listar_archivos_multilinea($carpeta){
	if(is_dir($carpeta)){
		if($dir = opendir($carpeta)){
			
            $archivos[] = null;
            echo "<div class='contenedor-principal'>";
			while(($archivo = readdir($dir)) !== false){
				if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
					if( is_dir($carpeta."/".$archivo) ){
						$nombreArchivo = $archivo;
						if( '&' == substr($archivo, 0, 1) )
							$nombreArchivo = substr($archivo, 3);
						$titulos[] = "<div class='yearselector' name='".$nombreArchivo."'><h3 class='titleYear'>".$nombreArchivo."</h3></div>";
						echo "<div class='contenidoMain colapsado'>";
                        echo listar_archivos($carpeta."/".$archivo,$nombreArchivo);
						echo "</div>";
					}else{
						$archivos[] = $archivo;
					}
				}
			}
			closedir($dir);
            echo "<div class='topYearNav'>";
            if($titulos != null){
                echo "<div class='yearNavigator'>";
                    foreach ($titulos as $ls) {  
                        echo $ls; 
                    }
                echo "</div>";
            }
			if($archivos){
                natsort($archivos);
                echo '<a> </a>';
                foreach ($archivos as $archivo) {  
                    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                    $nombre_base = basename($archivo, '.'.$extension);
                    if( '&' == substr($nombre_base, 0, 1) ){
                        $nombre_base = substr($nombre_base, 3);
                    }
                    echo '<a class="small" href="'.$carpeta.'/'.$archivo.'">'.$nombre_base.'</a><br>'; 
                }
            }
            
            echo "<div class='col-sm-12 MainInformation'></div>";
			
		}
	}
    echo "</div></div>";
}
?>

<?php
function listar_archivos($carpeta, $year){
	if(is_dir($carpeta)){
		if($dir = opendir($carpeta)){
			
            $archivos[] = null;
			while(($archivo = readdir($dir)) !== false){
				if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
					if( is_dir($carpeta."/".$archivo) ){
						$nombreArchivo = $archivo;
						if( '&' == substr($archivo, 0, 1) )
							$nombreArchivo = substr($archivo, 3);
						echo "<div class='col-sm-5 content ".$year."'><h3 class='subFiltro'>".$nombreArchivo."</h3>";
                            echo "<div class='row info-sub-item'>";
                            listar_archivos_12($carpeta."/".$archivo);
						echo "</div></div>";
						$linea = 0;
					}else{
						$archivos[] = $archivo;
					}
				}
			}
			closedir($dir);
			if($archivos){
                natsort($archivos);
                echo '<a> </a>';
                foreach ($archivos as $archivo) {  
                    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                    $nombre_base = basename($archivo, '.'.$extension);
                    if( '&' == substr($nombre_base, 0, 1) ){
                        $nombre_base = substr($nombre_base, 3);
                    }
                    echo '<a href="'.$carpeta.'/'.$archivo.'">'.$nombre_base.'</a><br>'; 
                }
            }
		}
	}
}
?>

<?php
function listar_archivos_12($carpeta){
	if(is_dir($carpeta)){
		if($dir = opendir($carpeta)){
			?>
			  <div class='col-sm-12'></div>
			<?php
            $archivos[] = null;
			while(($archivo = readdir($dir)) !== false){
				if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
					if( is_dir($carpeta."/".$archivo) ){
						$nombreArchivo = $archivo;
						if( '&' == substr($archivo, 0, 1) )
							$nombreArchivo = substr($archivo, 3);
						echo "<div class='col-sm-12' subcontent ><h3 class='titulo'>".$nombreArchivo."</h3>";
						echo listar_archivos_12($carpeta."/".$archivo);
						echo "</div>";
						$linea = 0;
					}else{
						$archivos[] = $archivo;
					}
				}
			}
			closedir($dir);
            if($archivos){
                natsort($archivos);
                echo '<div class="contentxt">';
                foreach ($archivos as $archivo) {  
                    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                    $nombre_base = basename($archivo, '.'.$extension);
                    if( '&' == substr($nombre_base, 0, 1) ){
                        $nombre_base = substr($nombre_base, 3);
                    }
                    echo '<a href="'.$carpeta.'/'.$archivo.'">'.$nombre_base.'</a><br>'; 
                }
                echo '</div>';
            }
			
		}
	}
}
?>
<script>
var yearfilter;
$(document).ready(function(){
    $(".contenidoMain").appendTo(".MainInformation");
    $(".info-sub-item").toggle("fast");
    $(".yearselector").click(function() {
        $( "."+yearfilter ).toggle("fast");
        $( "."+yearfilter ).parent().addClass("colapsado");
        
        yearfilter = $(this).attr('name');
        
        $( "."+yearfilter ).parent().removeClass("colapsado");
        $( "."+yearfilter ).toggle( "slow", function() {
            // todo bien
        });
        
    });
    
    $(".subFiltro").click(function() {
        $( this ).parent().find(".info-sub-item").toggle("fast");
    });
});
</script>

<!-- la forma de ordenaci贸n por el usuario es nombrando el archivo con el caracter de escape ';' seguido de 2 numeros que indicaran el orden -->
<!-- ejemplo de el nombre de un archivo ordenado por el usuario:' ;01filename '  donde ;01 indica la posici贸n y filename es el nombre y extensi贸n a usar-->
