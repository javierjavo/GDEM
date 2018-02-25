<?php
$homeRute = "/GDEM";
include($_SERVER['DOCUMENT_ROOT'].'/GDEM/servicios/conexion.php');
session_start();
$langProbem = [];
$resultado = $conexion->query("SELECT ".$_SESSION['lang']." FROM lenguaje WHERE page='creadorExamenes'");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    $langProbem[]= $fila[$_SESSION['lang']];
}

    ?>
    <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 200; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="remove-icon.png"/></a></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        $(addButton).click(function(){ //Once add button is clicked
            if(x < maxField){ //Check maximum number of input fields
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); // Add field html
            }
        });
        $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>
    <?php
    //Falta agregar respuestas
    echo'
    
                   <form action="../servicios/.php" class="login" method="post">
                    <fieldset>
                      <legend><h2 class="textoDinamico">Creador de examenes</h2></legend>
                       <label for="tipo" class="textoDinamico"> Introduce el tipo de examen:
                        <input type="text" name="tipo" id="tipo" placeholder="A-Z , a-z , 0-9" autocomplete="on" required>
                        </label>
                        <br>
                        <div class="field_wrapper">
                            <div>
                                <input type="text" name="field_name[]" value=""/>
                                    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
                            </div>
                        </div>
                        <input class="btn btn-primary" name="submit" type="submit" id="boton" value="Guardar" class="boton"/>
                          
                    </fieldset>
                </form>
';
?>


