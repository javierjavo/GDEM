<?php
include 'conexion.php';
session_start();

function Verificacion($nombre){
    include 'conexion.php';
    $consulta_a_la_base=mysqli_query($conexion,'select IDLogin from login where user="'.$nombre.'"');
    $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
    return $recoger_dato['IDLogin'];
}

if (isset($_POST['nombre']) and isset($_POST['clave1'])){
    $idioma="";
    $nombredeusuario=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $password=password_hash($_POST['clave1'],PASSWORD_DEFAULT);
    $edad=mysqli_real_escape_string($conexion,$_POST['edad']);
    $tipousuario=mysqli_real_escape_string($conexion,$_POST['tipousuario']);
    $residencia=mysqli_real_escape_string($conexion,$_POST['residencia']);
    $escolaridad=mysqli_real_escape_string($conexion,$_POST['escolaridad']);
    
    if ($residencia=="usa"){
        $idioma="en";
    }else{
        $idioma="es";
    }
    $id=Verificacion($nombredeusuario);
    if($id==null){
        $insertar=mysqli_query($conexion, 'insert into login(user,pass) values ("'.$nombredeusuario.'","'.$password.'")') or die ('No se puede registrar<br>'.mysqli_error($conexion));
        $id=Verificacion($nombredeusuario);
        $insertar1=mysqli_query($conexion, "INSERT INTO `personalinfo`(`IDLogin`, `nombre`, `edad`, `tipousuario`, `escolaridad`, `pais`, `idioma`) VALUES('$id','$nombredeusuario','$edad','$tipousuario','$escolaridad','$residencia','$idioma')")or die ('No se puede registrar<br>'.mysqli_error($conexion));
        mysqli_close($conexion);
        $_SESSION['alert'] = $nombredeusuario." registrado con exito";
    }else{
        //respondes un error de cuenta existente\
        $_SESSION['alert'] = "El usuario ya esta en uso intenta usar otro, puede ser tu correo electronico";
    }
}else{
    if(!isset($_SERVER['HTTP_REFERER']))
        header("Location: ../index.php");
}
header("Location:".$_SERVER['HTTP_REFERER']);
?>