<?php 
$homeRute = "/GDEM"; 
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php'); 
session_start(); 
$langExams = []; 
$resultado = $conexion->query("SELECT * FROM favoritos where ID_perfil ='". $_SESSION['usr'] ."'"); 
$resultado->data_seek(0); 
 
echo' 
            <div class="row text-left bg-light justify-content-center align-items-center"> 
                <div class="md-12"> 
               '; 
while ($fila = $resultado->fetch_assoc()) { 
    echo '<h1> '. $fila['Titulo'] . '</h1> <a href="'.$fila['URL'] .'">'. $fila['URL'] .'</a>'; 
}  
echo ' </div> 
        </div> 
    '; 
?>