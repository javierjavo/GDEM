<!DOCTYPE html>
<div class=''>
<?php
    session_start();
    include "../servicios/lenguaje.php";
    include "../servicios/listar.php" ;
    include "../objetos/header.php";
    $homeRute = "/GDEM";
    initStyles();
    echo listar_archivos_multilinea("../media/Libros/".$_SESSION['lang']);
?>
<br><br>
</div>
<?php
    include ("../objetos/pie.php");
?>
