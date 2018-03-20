var homeRoute = "/GDEM";

 
$( "#fondoFormLogin" ).click(function() { 
    $(this).parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().addClass( "fondoFormLoginout");
}); 
 
$("#cancelFormLogin").click(function() { 
    $(this).parent().parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().parent().addClass( "fondoFormLoginout"); 
}); 
 
$("#loginButton").click(function() { 
    $("#fondoFormLogin").parent().removeClass("inicioIinvisible"); 
    $("#fondoFormLogin").parent().removeClass( "fondoFormLoginout"); 
    $("#fondoFormLogin").parent().addClass( "fondoFormLoginin"); 
}); 

$("#sendInformationLogin").click(function() { 
    $("#colectUserInfoName").val(); 
    $("#colectUserInfoPass").val(); 
    window.location.href="./servicios/login.php?usr="+$("#colectUserInfoName").val()+"&pass="+$("#colectUserInfoPass").val();
}); 


var contresp=0;
var contpreg=0;
var preg = [];
var resp = new Array();
var cont_pregunta = 0;

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
        aux.push(cont_pregunta+'|'+r[i].value);
    }
    resp.push(aux);
    contresp=0;
    $('.rPregunta').remove();
    cont_pregunta++;
    if(terminar){
        document.location = '/GDEM/servicios/testMkrSrv.php?preguntas='+preg+'&&respuestas='+resp+'&&nombre='+document.getElementById("actname").value+'&&tipo='+document.getElementById("tipo").value+'&&region='+document.getElementById("region").value;
        var parametros = {
            "preguntas" : preg,
            "respuestas" : resp,
            'nombre': document.getElementById("actname").value,
            'tipo':document.getElementById("tipo").value,
            'region': document.getElementById("region").value
        };
		preg = [];
        resp = [];
        
        /*
        
        $.ajax({
            data: parametros, //datos que se envian a traves de ajax
            url: '/GDEM/servicios/testMkrSrv.php', //archivo que recibe la peticion
            type: 'POST', //método de envio
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#resultado").html("response");
            }
        });/*
        */
        
    }
}
