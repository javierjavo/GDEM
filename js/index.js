var homeRoute = "/GDEM";

$( "#fondoFormLogin" ).click(function() {
    $(this).parent().toggleClass( "fondoFormLoginin");
    $(this).parent().toggleClass( "fondoFormLoginout");
});

$("#cancelFormLogin").click(function() {
    $(this).parent().parent().toggleClass( "fondoFormLoginin");
    $(this).parent().parent().toggleClass( "fondoFormLoginout");
});

$("#loginButton").click(function() {
    $("#fondoFormLogin").parent().removeClass("inicioIinvisible");
    $("#fondoFormLogin").parent().toggleClass( "fondoFormLoginin");
    $("#fondoFormLogin").parent().toggleClass( "fondoFormLoginout");
});


$("#sendInformationLogin").click(function() {
    $("#colectUserInfoName").val();
    $("#colectUserInfoPass").val();
    window.location.href=homeRoute+"/servicios/login.php?usr="+$("#colectUserInfoName").val()+"&pass="+$("#colectUserInfoPass").val();
});

function redirToPage(url){
    var request = new XMLHttpRequest();  
    request.open('GET', url, false);  
    request.send();
    // ver estado del request redyStatus
    /*
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.4.0"></script>
        {
      // GET /someUrl
      this.$http.get('/someUrl').then(response => {

        // get body data
        this.someData = response.body;

      }, response => {
        // error callback
      });
    }
    */
    if (request.status == 404) {  
        alert("parece que esta no fue encontrada, lo resolveremos lo mas pronto posible");
    }else{
        alert("okis");
        window.location.href = url;
    }
}

var contpreg=0;
var preg = [];
var resp = [];

function addObj(contenedor){
    elemento = "<div><input class='rPregunta' name='cPregunta' type='text' value=''/></div>";
    $(contenedor).append(elemento);
    contpreg++;
}

function delObj(contenedor){
    contpreg--;
    $('.rPregunta')[contpreg].remove();
}

function guardarObj(terminar){
    //aqui es donde se guarda la pregunta con ajax
    preg.push(document.getElementById("pregunta").value);
    r = document.getElementsByClassName("rPregunta");
    aux = [];
    for(var i = 0; i<r.length;i++){
        aux.push(r[i].value);
    }
    resp.push(aux);
    contpreg=0;
    $('.rPregunta').remove();
    
    if(terminar){
        var parametros = {
            "preguntas" : preg,
            "respuestas" : resp
        };
        $.ajax({
            data: parametros, //datos que se envian a traves de ajax
            url: '', //archivo que recibe la peticion
            type: 'POST', //método de envio
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#resultado").html("response");
            }
        });
        preg = [];
        resp = [];
    }
    console.log(preg);
    console.log(resp);
}
