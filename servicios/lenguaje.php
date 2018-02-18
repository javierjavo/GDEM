<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    $idioma=[];
    if($_GET['lang']){
        $_SESSION['lang'] = $_GET['lang'];  
    }else if(!$_SESSION['lang']){
        $_SESSION['lang'] = "es";
    }
    echo "<html lang='".$_SESSION['lang']."'>";

    function initStyles(){
        echo'<link rel="stylesheet" href="/GDEM/css/index.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
    }
    
    function loadTxt($pagina){
        include('conexion.php');
        $resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='$pagina'");
        $resultado->data_seek(0);
        while ($fila = $resultado->fetch_assoc()) {
            $idioma[]= $fila[$_SESSION['lang']];
        }
            echo '<script language="javascript"> var idioma = '.json_encode($idioma).';';
        ?>

                var cajones = document.getElementsByClassName("textoDinamico");
                let limit = (cajones.length<idioma.length)?cajones.length:idioma.length;
                
                for(let i = 0;i<limit;i++){
                    cajones[i].innerHTML = idioma[i];
                }
            </script>
        <?php
    }

    ?>
