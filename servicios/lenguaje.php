<?php
session_start();
if($_GET['lang']){
    $_SESSION['lang'] = $_GET['lang'];  
}else if(!$_SESSION['lang']){
    header ("Location: ../index.php");
}
echo "<html lang='".$_SESSION['lang']."'>";

?>