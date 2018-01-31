<!DOCTYPE html>
<?php
    include "../servicios/lenguaje.php";
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no" >
        <title>Home GDEM</title>
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body class="fondoHome">
        <header  role="banner">
            <?php
                include"../objetos/header.php";
            ?>
        </header>
           
            <!--Contenido de la pagina-->
        <main class="contenido" role="main">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border: 3px;">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" style="max-height:400px;" src="../../Media/board3.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block " style="background-color: rgba(10,10,10,.5);  border-radius: 5px;">
                    <h3>¡Conoce acerca del PROBEM y todo lo que tiene a ofrecer para ti!</h3>
                    <p>La coordinación del PROBEM es la encargada de ofreces y facilitar bajo el sustento de la SEP...</p>
                    <a href="probem.html" class="btn btn-primary">Entra aqui para conocer más</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" style="max-height:400px;" src="../../Media/board2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block" style="background-color: rgba(10,10,10,.5);  border-radius: 5px;">
                    <h3>¡Adelante llena este formulario y encuentras las respuestas que buscas!</h3>
                    <p>Contesta un pequeño formulario para conocer escuelas cerca de tu domicilio, tramites de tu interes y mas...(descuida no necesitamos datos confidenciales)</p>
                    <a href="formulario.html" class="btn btn-primary">Contestar Formulario</a>
                  </div>              
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" style="max-height:400px;" src="../../Media/board.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block" style="background-color: rgba(10,10,10,.5);  border-radius: 5px;">
                    <h3>¡Conoce acerca del PROBEM y todo lo que tiene a ofrecer para ti!</h3>
                    <p>La coordinación del PROBEM es la encargada de ofreces y facilitar bajo el sustento de la SEP...</p>
                    <a href="probem.html" class="btn btn-primary">Entra aqui para conocer más</a>
                  </div>              
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <section class="container" id="languajes" >
                <div class="row align-items-center"  style="min-height: 675px;">
                    <div class="col text-center"><button class="btn btn-lg btn-primary">Tramites</button></div>
                    <div class="col text-center"> <img src="../../Media/choice.jpg" alt="" class="rounded img-fluid"></div>
                    <div class="col text-center"><button class="btn btn-lg btn-primary">Recursos</button></div>
                </div>
            </section>
        </main>
            <!--Footer de la pagina -->
        <?php
        include"../objetos/pie.php";
        ?>
    </body>
