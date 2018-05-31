<?php 
$homeRute = "/GDEM"; 
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php'); 
session_start(); 
$langExams = []; 
$resultado = $conexion->query("SELECT * FROM actividades"); 
$resultado->data_seek(0); 
 
echo' 
            <div class="row bg-light justify-content-center align-items-center"> 
                <div class="md-12"> 
               '; 
while ($fila = $resultado->fetch_assoc()) { 
    echo '<h1> '. $fila['nombre'] . '</h1> <h2> '.$fila['tipo'] .'</h2> <h2> '. $fila['region'] .' </h2><br><input id="editar'. $fila['nombre'] .'" class="m-3 btn btn-primary" type="button" value="Editar examen '. $fila['nombre'] .'">'; 
}  
echo ' </div> 
        </div> 
    '; 
?>