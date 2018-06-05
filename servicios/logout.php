<?php
    session_start();
    unset($_SESSION['usr']);
    unset($_SESSION['usr_type']);
    header("Location:".$_SERVER['HTTP_REFERER']);
?>