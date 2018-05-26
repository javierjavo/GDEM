<?php
$homeRute = "/GDEM";
include ($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();

if ($resultadoD = $conexion->query("SELECT * FROM personalinfo where nombre = '". $_SESSION['usr'] ."'"))
{
    while ($fila_actual = $resultadoD->fetch_row())
    {
        echo
        '
        <form action="/GDEM/servicios/actualizar.php" class="login" method="post">
                    <fieldset>
        <h2 class="display-4">Mi Información Personal</h2>
            <div class="row">
                         <div class="col-md-6 text-right">
                             <label class="my-4" for="nombre"> Nombre o Pseudonimo / Name or Nickname:
                        </label>
                        <br>
                        <label class="my-4" for="edad"> Edad / Age:
                          
                        </label>
                        <br>
                        <label class="my-4" for="">Residencia / Place of residence</label>
                          
                        <br>
                        <label class="my-4" for="">Tipo de usuario / Type of user</label>
                            
                        <br>
                        <label class="my-4" for="">Ultima escolaridad cursada / Last grade taken: (México)</label>
                         </div>
                         <div class="col-md-6 text-left">
                             <h4 class="my-4" >'. $fila_actual[1] .'</h4><br>
                             <input type="number" class="my-4" name="edad_update" id="edad" value="'. $fila_actual[2] .'" placeholder="Edad / Age" autocomplete="on" required min="0"/><br>
                             <select class="residencia my-4" name="residencia_update">
                             '; if($fila_actual[5] == 'mex') { echo '<option value="usa">United States of America</option>
                            <option value="mex" selected>Mexico</option>';}
                            else { echo '<option value="usa" selected>United States of America</option>
                            <option value="mex" >Mexico</option>';}
                        echo '     
                          </select><br>
                          <select class="tipousuario my-4" name="tipousuario_update">
                                 '; if($fila_actual[3] == 'alumno') { echo '<option value="maestro">Maestro </option>
                                <option value="alumno" selected>Alumno</option>';}
                            else { echo '<option value="maestro" selected>Maestro </option>
                                <option value="alumno" >Alumno</option>';}
                        echo '        
                            </select><br>
                             <select class="residencia my-4" text="nose1" name="escolaridad_update">
                            <option value="selection" selected disabled="true">Selecciona una opcion...</option>
                            <option value="KinderGarden">Kinder Garden</option>
                            <option value="EducacionBasica">Educación basica</option>
                            <option value="EducacionMedia">Educación Media</option>
                            <option value="Universidad">Educación Media Superior</option>
                          </select><br>
                         </div>
                         <input class="btn btn-primary mx-4" name="submit" type="submit" id="boton1" value="Registrar / Register" class="boton" onClick="comprobarClave()"/>
                        <button class="btn btn-secondary" type="reset" >Volver / Cancel</button>
                        </fieldset>
                        </form>
                      </div>
        ';
    }
}

?>