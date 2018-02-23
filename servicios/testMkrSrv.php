<?php
//Faltan las respuestas
    include 'conexion.php';
    session_start();

    function validarIDAct($nombreAct){
        include 'conexion.php';
        $consulta_a_la_base=mysqli_query($conexion,'select IDAct from actividades where tipo="'.$nombreAct.'"');
        $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
        return $recoger_dato['IDAct'];
    }

    function validarIDPregunta($IDAct){
        include 'conexion.php';
        $consulta_a_la_base=mysqli_query($conexion,'select IDPregunta from preguntas where ="'.$IDAct.'"');
        $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
        return $recoger_dato['IDPregunta'];
    }

    $nombre="examen";
    $idioma=$_SESSION['lang'];
    $tipoExamen=mysqli_real_escape_string($conexion,$_POST['tipo']);
    $field_values_array = $_REQUEST['field_name'];
    
    $idAct=validarIDAct($tipoExamen);
    if($idAct==null){
        $insertar=mysqli_query($conexion, 'insert into actividades(nombre,tipo,idioma) values ("'.$nombre.'","'.$tipoExamen.'","'.$idioma.'")') or die ('No se puede registrar<br>'.mysqli_error($conexion));
    }
        
    $idp=validarIDPregunta($idAct);//ver si existe id de examen y si no, entonces creamos el conjunto de prenguntas
    if(idp==null){
        foreach($field_values_array as $pregunta){
            $insertar1=mysqli_query($conexion, 'insert into preguntas(IDActividad,textoPregunta) values("'.$idp.'","'.$pregunta.'")') or die ('No se puede registrar<br>'.mysqli_error($conexion));
        }
    }    
    
    mysqli_close($conexion);
    $_SESSION['error'] ="Examen tipo: "$tipo.", Registrado con exito";
    }else{
        //respondes un error de examen existente\
        $_SESSION['alert'] = "Este tipo de examen ya existe";
    }
header("Location:".$_SERVER['HTTP_REFERER']);
?>