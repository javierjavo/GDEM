
<link rel="stylesheet" href="/GDEM/css/index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
if($_GET['lang']){
    $_SESSION['lang'] = $_GET['lang'];  
}else if(!$_SESSION['lang']){
    $_SESSION['lang'] = "es";
}
echo "<html lang='".$_SESSION['lang']."'>";
?>