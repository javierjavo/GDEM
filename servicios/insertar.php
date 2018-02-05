<?php
if (isset($_POST['nombre']) and isset($_POST['clave1'])){
    include 'conexion.php';
    $idioma="";
    $nombredeusuario=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $password=password_hash($_POST['clave1'],PASSWORD_DEFAULT);
    $edad=mysqli_real_escape_string($conexion,$_POST['edad']);
    $tipousuario=mysqli_real_escape_string($conexion,$_POST['tipousuario']);
    $residencia=mysqli_real_escape_string($conexion,$_POST['residencia']);
    
    if ($residencia=="usa"){
        $escolaridad=mysqli_real_escape_string($conexion,$_POST['escolaridad1']);
        $idioma="eng";
    }else{
        $escolaridad=mysqli_real_escape_string($conexion,$_POST['escolaridad2']);
        $idioma="esp";
    }
    
    $insertar=mysqli_query($conexion, 'insert into login(user,pass) values ("'.$nombredeusuario.'","'.$password.'")') or die ('No se puede registrar<br>'.mysqli_error($conexion));
    $insertar1=mysqli_query($conexion, 'insert into personalinfo(nombre,edad,escolaridad,tipousuario,pais,idioma) values ("'.$nombredeusuario.'","'.$edad.'","'.$escolaridad.'","'.$tipousuario.'","'.$escolaridad.'","'.$residencia.'","'.$idioma.'")') or die ('No se puede registrar<br>'.mysqli_error($conexion));
    mysqli_close($conexion);
    header('location: www.google.com');
}else{
    header('location: www.youtube.com');
}
?>