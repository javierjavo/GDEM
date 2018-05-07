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
    $_SESSION['menu_status'] = TRUE;
    function initStyles(){
        echo' <link rel="stylesheet" href="/GDEM/css/bootstrap.min.css"> <link rel="stylesheet" href="/GDEM/css/index.css"> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">';
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
