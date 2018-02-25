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
    
    if (request.status == 404) {  
        alert("parece que esta no fue encontrada, lo resolveremos lo mas pronto posible");
    }else{
        alert("okis");
        window.location.href = url;
    }
}

var contpreg=0;
function addObj(contenedor,elemento){
    if(elemento==1){
        //preg
        elemento = "<div><input class='cPregunta' name='cPregunta[]' type='text' value=''/></div>";
        $(contenedor).append(elemento);
    }
    else{
        var obj = 'cPregunta'+contpreg;
        contpreg++;
        elemento = '<div style="background-color:red; height:300px;">'+
                        '<button id="'+obj+'">addResp</button>'+
                    '</div>';
        $(contenedor).parent().append(elemento);
        $('#'+obj).click(function(){
             elemento = "<div><input class='"+obj+"' name='"+obj+"[]' type='text' value=''/></div>";
            $(this).parent().append(elemento);
        });
    }
}
