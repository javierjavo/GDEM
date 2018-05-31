<!DOCTYPE html>
<?php
    include "../servicios/lenguaje.php";
    initStyles();
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no" >
        <title>Home GDEM</title>
         <!-- Bootstrap CSS -->
    </head>
    <body class="fondoHome">
        <header  role="banner">
            <?php
                include"../objetos/header.php";
            ?>
        </header>
   	   	<!--Contenido de la pagina-->
	<main class="contenido" role="main">
		<section class="container" id="languajes" >
            <div class="row text-center align-items-center justify-content-center bg-light"  style="min-height: 675px;">
               <div class="col-md-10">
                   <form action="../servicios/insertar.php" class="login" method="post">
                    <fieldset>
                      <legend class="m-3 text-secondary display-4">Introduce tu informacion aqui / Enter your information here</legend>
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
                         
                        <br>
                        <label class="my-4" for="">
                          Contraseña / Password: 
                        </label>
                        <br> 
                        <label  class="my-4" for="">
                          Repite la contraseña / Repeat password:  
                        </label> <br>
                         </div>
                         <div class="col-md-6 text-left">
                             <input type="text" class="my-4" name="nombre" id="nombre" placeholder="Nombre / Name" autocomplete="on" required/><br>
                             <input type="number" class="my-4" name="edad" id="edad" placeholder="Edad / Age" autocomplete="on" required min="0"/><br>
                             <select class="residencia my-4" name="residencia">
                            <option value="usa">United States of America</option>
                            <option value="mex" selected>Mexico</option>       
                          </select><br>
                          <select class="tipousuario my-4" name="tipousuario">
                                <option value="maestro">Maestro </option>
                                <option value="alumno" selected>Alumno</option>         
                            </select><br>
                             <select class="residencia my-4" name="escolaridad">
                            <option value="kinderGarden">Kinder Garden</option>
                            <option value="elementary" selected>Elementary School</option>       
                            <option value="middle" selected>Middle School</option>       
                            <option value="high" selected>High School</option> 
                            <option value="primaria">Educación basica</option>
                            <option value="secundaria">Educación Media</option>
                            <option value="universidad">Educación Media Superior</option>
                          </select><br>
                          <input type="password" class="my-4" name="clave1" size="20" placeholder="Ingresar password"> <br>
                          <input type="password" class="my-4" name="clave2" size="20" placeholder="Repetir password"> <br>
                         </div>
                      </div>
                        <input class="btn btn-primary mx-4" name="submit" type="submit" id="boton" value="Registrar / Register" class="boton" onClick="comprobarClave()"/>
                        <button class="btn btn-secondary" type="reset" >Limpiar formulario / Clean form</button>       
                    </fieldset>
                </form>
               </div>
            </div>
		</section>
	</main>
        <!--Footer de la pagina -->
    <?php
        include "../objetos/pie.php";
    ?>
</body>