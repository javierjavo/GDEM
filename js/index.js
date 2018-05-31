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

$( "#fondoFormLogin2" ).click(function() { 
    $(this).parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().addClass( "fondoFormLoginout");
}); 
 
$("#cancelFormLogin2").click(function() { 
    $(this).parent().parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().parent().addClass( "fondoFormLoginout"); 
}); 
 
$("#loginButton2").click(function() { 
    $("#fondoFormLogin2").parent().removeClass("inicioIinvisible"); 
    $("#fondoFormLogin2").parent().removeClass( "fondoFormLoginout"); 
    $("#fondoFormLogin2").parent().addClass( "fondoFormLoginin"); 
}); 

$( "#fondoFormLogin3" ).click(function() { 
    $(this).parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().addClass( "fondoFormLoginout");
}); 
 
$("#cancelFormLogin3").click(function() { 
    $(this).parent().parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().parent().addClass( "fondoFormLoginout"); 
}); 
 
$("#loginButton3").click(function() { 
    $("#fondoFormLogin3").parent().removeClass("inicioIinvisible"); 
    $("#fondoFormLogin3").parent().removeClass( "fondoFormLoginout"); 
    $("#fondoFormLogin3").parent().addClass( "fondoFormLoginin"); 
}); 

$( "#fondoFormLogin4" ).click(function() { 
    $(this).parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().addClass( "fondoFormLoginout");
}); 
 
$("#cancelFormLogin4").click(function() { 
    $(this).parent().parent().removeClass( "fondoFormLoginin"); 
    $(this).parent().parent().addClass( "fondoFormLoginout"); 
}); 
 
$("#loginButton4").click(function() { 
    $("#fondoFormLogin4").parent().removeClass("inicioIinvisible"); 
    $("#fondoFormLogin4").parent().removeClass( "fondoFormLoginout"); 
    $("#fondoFormLogin4").parent().addClass( "fondoFormLoginin"); 
}); 

$("#sendInformationLogin").click(function() { 
    $("#colectUserInfoName").val(); 
    $("#colectUserInfoPass").val(); 
    window.location.href="/GDEM/servicios/login.php?usr="+$("#colectUserInfoName").val()+"&pass="+$("#colectUserInfoPass").val();
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
