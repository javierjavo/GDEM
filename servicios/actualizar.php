<?php
include 'conexion.php';
session_start();

if (isset($_POST['edad_update'])){
    $nueva_edad = mysql_real_escape_string($_POST['edad_update']);
    $nueva_residencia = mysql_real_escape_string($_POST['residencia_update']);
    $nueva_tipoUser = mysql_real_escape_string($_POST['tipousuario_update']);
    $nueva_escolaridad = mysql_real_escape_string($_POST['escolaridad_update']);
    if ($nueva_residencia=="usa"){
        $idioma="en";
    }else{
        $idioma="es";
    }
    if ($conexion->query("update personalinfo set edad = '". $nueva_edad ."', pais ='". $nueva_residencia ."', tipousuario = '". $nueva_tipoUser ."', escolaridad = '"  . $nueva_escolaridad ."', idioma ='". $idioma ."' where nombre= '". $_SESSION['usr'] ."'"))
    {
        $_SESSION['alert'] = "Los datos del usuario:" . $_SESSION['usr'] . "han sido actualizados";
    }
    else
    {
        $_SESSION['alert'] = "No ha sido posible la actualizacion de datos... " . $conexion->error;
    }}
else{
    if(!isset($_SERVER['HTTP_REFERER']))
        header("Location: ../index.php");
}
header("Location:".$_SERVER['HTTP_REFERER']);
?>