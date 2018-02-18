<!DOCTYPE html>

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
            <div class="row align-items-center justify-content-center bg-light"  style="min-height: 675px;">
               <div class="col-md-auto">
                   <form action="../servicios/insertar.php" class="login" method="post">
                    <fieldset>
                      <legend>Introduce tu informacion aqui / Enter your information here</legend>
                       <label for="nombre"> Nombre o Pseudonimo / Name or Nickname:
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre / Name" autocomplete="on" required>
                        </label>
                        <br>
                        <label for="edad"> Edad / Age:
                          <input type="number" name="edad" id="edad" placeholder="Edad / Age" autocomplete="on" required min="0"/>
                        </label>
                        <br>
                        <label for="">Residencia / Place of residence</label>
                          <select class="residencia" name="residencia">
                            <option value="usa">United States of America</option>
                            <option value="mex" selected>Mexico</option>       
                          </select>
                        <br>
                        <label for="">Tipo de usuario / Type of user</label>
                            <select class="tipousuario" name="tipousuario">
                                <option value="maestro">Maestro </option>
                                <option value="alumno" selected>Alumno</option>         
                            </select>
                        <br>
                        <label for="">Ultima escolaridad cursada / Last grade taken: (México)</label>
                          <select class="residencia" name="escolaridad">
                            <option value="kinderGarden">Kinder Garden</option>
                            <option value="elementary" selected>Elementary School</option>       
                            <option value="middle" selected>Middle School</option>       
                            <option value="high" selected>High School</option> 
                            <option value="primaria">Educación basica</option>
                            <option value="secundaria">Educación Media</option>
                            <option value="universidad">Educación Media Superior</option>
                          </select>
                        <br>
                        <label for="">
                          Contraseña / Password: <input type="password" name="clave1" size="20" placeholder="ingresar password"> 
                        </label>
                        <br> 
                        <label for="">
                          Repite la contraseña / Repeat password: <input type="password" name="clave2" size="20" placeholder="repetir password"> 
                        </label> <br>
                        <input class="btn btn-primary" name="submit" type="submit" id="boton" value="Registrar / Register" class="boton" onClick="comprobarClave()"/>
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