<?php
    //error_reporting(0);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    if($_SESSION['usr']==NULL){
        echo'<div class="collapse show bg-light" id="navbarHeader" style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 py-4">
                  <img class="img-fluid" src="media/Logo_probem.png" alt="Logo_GDEM">
                </div>
                <div class="col-sm-6 py-4">
                  <h3 class="text-center">GDEM</h3>
                  <p class="text-center">Guia Digital de Educación al Migrante / National Digital Guide for Migrants</p>  
                </div>
                <div class="col-sm-4 py-4 text-center">
                    <h5>¿Ya tienes cuenta? / Do you have an account?</h5>
                    <a id="loginButton" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Entrar a tu sesión / Login </a>
                    <a href="" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Registrarse / Create account </a>
                </div>
            </div>
        </div>
    </div>';
    }else{
        echo'<div class="navbar navbar-light bg-light"><h3>'.$_SESSION['usr'].'</h3></div><div class="collapse show bg-light" id="navbarHeader" style="">
        <div class="container-fluid containerMenuOption">
            <a class="menuOp" href="">menu option 1</a>
            <a class="menuOp" href="">menu option 2</a>
            <a class="menuOp" href="">menu option 3</a>
            <a class="menuOp" href="">menu option 4</a>
            <a class="menuOp" href="./servicios/logout.php">logout</a>
        </div>
    </div>';
    }
?>