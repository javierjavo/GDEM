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
        
        return;
    }else{
        alert("okis");
    }
    
    window.location.href = url;
}



