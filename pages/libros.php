<!DOCTYPE html>
<div class='row'>
<?php
    session_start();
    include "../servicios/lenguaje.php";
    include "../servicios/listar.php" ;
    include "../objetos/header.php";
    $homeRute = "/GDEM";
    initStyles();
    echo listar_archivos_multilinea("../media/Libros/".$_SESSION['lang'])."<div class='col-xs-12'></div></div>";
?>
<br><br>
<?php
    include ("../objetos/pie.php");
?>
