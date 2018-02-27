<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langpie = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='pie'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langpie[]= $fila[$_SESSION['lang']];
}
echo'
    <footer class="footer bg-light" role="contentinfo" >
       <div class="container-fluid">
          <div class="row align-items-center">
              <div class="col align-self-center text-center"><a href="#">'.$langpie[0].'</a></div>
              <div class="col text-center"><p class="textoDinamicoPie">'.$langpie[1].' ©<br> Ivan Antonio Oviedo Galvan <br>Carlos Ignacio Valdez Aguilar <br>Jose Ignacio Sanchez Anguiano </p></div>
          </div>         
       </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="/GDEM/js/bootstrap.min.js"></script>
    <script src="'.$homeRute.'/js/index.js"></script>';
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.4.0"></script>
?>
