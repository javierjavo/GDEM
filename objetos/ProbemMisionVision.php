<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langProbem = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='pie'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langProbem[]= $fila[$_SESSION['lang']];
}
echo'
               <div class="col-md-4">
                   <form action="../servicios/insertar.php" class="login" method="post">
                    <fieldset>
                      <legend>Misión</legend>
                       <label for="nombre"> Nombre o Pseudonimo / Name or Nickname:
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre / Name" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="estado"> Estado de residencia/Current state of residence:
                        <input type="text" name="estado" id="estado" placeholder="Estado / State" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="comentarios"> Comentarios/Comments:
                        <input type="text" name="comentarios" id="comentarios" placeholder="Comentarios / Commentarios" autocomplete="on" required>
                        </label>
                        <br>
                        <input class="btn btn-primary" name="submit" type="submit" id="boton" value="Enviar Commentarios / Send comments" class="boton" onClick=""/>
                    </fieldset>
                </form>
               </div>
               <div class="col-md-4">
                   <form action="../servicios/insertar.php" class="login" method="post">
                    <fieldset>
                      <legend>Imagen</legend>
                       <label for="nombre"> Nombre o Pseudonimo / Name or Nickname:
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre / Name" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="estado"> Estado de residencia/Current state of residence:
                        <input type="text" name="estado" id="estado" placeholder="Estado / State" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="comentarios"> Comentarios/Comments:
                        <input type="text" name="comentarios" id="comentarios" placeholder="Comentarios / Commentarios" autocomplete="on" required>
                        </label>
                        <br>
                        <input class="btn btn-primary" name="submit" type="submit" id="boton" value="Enviar Commentarios / Send comments" class="boton" onClick=""/>
                    </fieldset>
                </form>
               </div>
               <div class="col-md-4">
                   <form action="../servicios/insertar.php" class="login" method="post">
                    <fieldset>
                      <legend>Visión</legend>
                       <label for="nombre"> Nombre o Pseudonimo / Name or Nickname:
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre / Name" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="estado"> Estado de residencia/Current state of residence:
                        <input type="text" name="estado" id="estado" placeholder="Estado / State" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="comentarios"> Comentarios/Comments:
                        <input type="text" name="comentarios" id="comentarios" placeholder="Comentarios / Commentarios" autocomplete="on" required>
                        </label>
                        <br>
                        <input class="btn btn-primary" name="submit" type="submit" id="boton" value="Enviar Commentarios / Send comments" class="boton" onClick=""/>
                    </fieldset>
                </form>
               </div>
    ';
?>