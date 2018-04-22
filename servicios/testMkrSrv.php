<?php
//Faltan las respuestas
    include 'conexion.php';
    session_start();

    function validarIDAct($nombreAct){
        include 'conexion.php';
        $consulta_a_la_base=mysqli_query($conexion,'select IDAct from actividades where nombre="'.$nombreAct.'"');
        $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
        return $recoger_dato['IDAct'];
    }

    function validarIDPregunta($IDAct){
        include 'conexion.php';
        $consulta_a_la_base=mysqli_query($conexion,'select IDPregunta from preguntas where IDActividad="'.$IDAct.'"');
        $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
        return $recoger_dato['IDPregunta']+1;
    }

    function validarIDRespuesta($IDPrg){
        include 'conexion.php';
        $consulta_a_la_base=mysqli_query($conexion,'select IDRespuesta from respuestas where IDPregunta ="'.$IDPrg.'"');
        $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
        return $recoger_dato['IDRespuesta']+1;
    }

    $nombre=mysqli_real_escape_string($conexion,$_REQUEST['nombre']);
    $idioma=mysqli_real_escape_string($conexion,$_REQUEST['region']);
    $tipo=mysqli_real_escape_string($conexion,$_REQUEST['tipo']);
    $field_values_array = $_REQUEST['preguntas'];
    $field_values_array2 = $_REQUEST['respuestas'];
    
    $idAct=validarIDAct($nombre);//ver si existe id de examen, si no lo creamos
    if($idAct==null){
        $insertar=mysqli_query($conexion, 'insert into actividades(nombre,tipo,region) values ("'.$nombre.'","'.$tipo.'","'.$idioma.'")') or die ('No se puede registrar<br>'.mysqli_error($conexion));
    }
        
    $idp=validarIDPregunta($idAct);//ver si existe id de examen en las preguntas y si no, entonces creamos el conjunto de prenguntas
    if($idp==null){
        for($i = 0;$i<sizeof($field_values_array);$i++){
                $pregunta = $field_values_array[$i];
                $insertar1=mysqli_query($conexion, 'insert into preguntas(IDActividad,textoPregunta) values("'.$idAct.'+1","'.$pregunta.'")') or die ('No se puede registrar<br>'.mysqli_error($conexion));
                $idr=validarIDRespuesta($idp);//ver si existe id de la pregunta y si no, entonces creamos el conjunto de respuestas
                if($idr==null){
                    for($y = 0; $y<sizeof($field_values_array2);$y++){
                        $respuesta_indice = $field_values_array2[$y];
                        $respuesta = preg_split("|", $respuesta_indice);
                        if ($respuesta[0] == $i){
                            $insertar2=mysqli_query($conexion, 'insert into respuestas(IDPregunta,textoRespuesta,valor) values("'.$idp.'+1","'.$respuesta[1].'",TRUE)') or die ('No se puede registrar<br>'.mysqli_error($conexion));
                        }
                        
                }
            }
        }
    }    
    mysqli_close($conexion);
   	$_SESSION['alert'] = "Examen tipo: ".$tipo.", Registrado con exitOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";


    if($idAct!=null){
        //respondes un error de examen existente\
        $_SESSION['alert'] = "Este tipo de examen ya existe";
    }
header("Location:".$_SERVER['HTTP_REFERER']);
?>
