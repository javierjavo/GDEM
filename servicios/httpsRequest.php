<?php
$urlRequest = $_GET['variableHtml'];
httpsRequest($urlRequest);

function httpsRequest($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo $url;
    if ($response){
        
   header("Location:".$url);
}
    else{
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
curl_close($ch);
}
?>