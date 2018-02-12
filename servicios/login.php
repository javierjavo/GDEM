<?php
    session_start();
    
    if (isset($_GET['usr']) and isset($_GET['pass'])){
        include('conexion.php');
        $nombredeusuario=mysqli_real_escape_string($conexion,$_GET['usr']);
        $password=mysqli_real_escape_string($conexion,$_GET['pass']);
        $comprobacion_del_nombre='select * from login where user="'.$nombredeusuario.'"';
        $comprobacion=$conexion->query($comprobacion_del_nombre);
        if ($comprobacion->num_rows>0){
            $consulta_a_la_base=mysqli_query($conexion,'select * from login where user="'.$nombredeusuario.'"');
            $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
            $comprobar_password=password_verify($password,$recoger_dato['pass']);
            if ($comprobar_password){
                $_SESSION['usr']=$_GET['usr'];
                $_SESSION['id']=$recoger_dato['IDLogin'];
                header("Location:".$_SERVER['HTTP_REFERER']);
            }else{
                $_SESSION['alert'] = "Password Incorrecto";
                header("Location:".$_SERVER['HTTP_REFERER']);
            }
        }else{
            //redirigir a registrar
        }
    }
    
?>
