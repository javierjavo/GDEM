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
                             <input type="text" class="my-4" name="nombre" id="nombre" value="'. $fila_actual[1] .'" placeholder="Nombre / Name" autocomplete="on" required/><br>
                             <input type="number" class="my-4" name="edad" id="edad" value="'. $fila_actual[2] .'" placeholder="Edad / Age" autocomplete="on" required min="0"/><br>
                             <select class="residencia my-4" name="residencia">
                             '; if($fila_actual[5] == 'mex') { echo '<option value="usa">United States of America</option>
                            <option value="mex" selected>Mexico</option>';}
                            else { echo '<option value="usa" selected>United States of America</option>
                            <option value="mex" >Mexico</option>';}
                        echo '     
                          </select><br>
                          <select class="tipousuario my-4" name="tipousuario">
                                 '; if($fila_actual[3] == 'alumno') { echo '<option value="maestro">Maestro </option>
                                <option value="alumno" selected>Alumno</option>';}
                            else { echo '<option value="maestro" selected>Maestro </option>
                                <option value="alumno" >Alumno</option>';}
                        echo '        
                            </select><br>
                             <select class="residencia my-4" text="nose1" name="escolaridad">
                            <option value="selection" selected disabled="true">Selecciona una opcion...</option>
                            <option value="KinderGarden">Kinder Garden</option>
                            <option value="ElementarySchool">Elementary School</option>       
                            <option value="middle" >Middle School</option>       
                            <option value="HighSchool" >High School</option> 
                            <option value="EducacionBasica">Educación basica</option>
                            <option value="EducacionMedia">Educación Media</option>
                            <option value="Universidad">Educación Media Superior</option>
                          </select><br>
                         </div>
                         <button class="">Guardar Informacion</button><button>Cancelar</button>
                      </div>
        ';
    }
}

?>