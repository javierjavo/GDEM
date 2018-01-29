<?php
    session_start();
    $_SESSION['usr']=$_GET['usr'];
    header("Location:".$_SERVER['HTTP_REFERER']);
?>