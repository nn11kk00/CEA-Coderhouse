<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["Email"];
	$content = $_POST["mesagge"];

	$toEmail = "nicolascapdevielle@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $content, $mailHeaders)) {
	    $message = "Su información de contacto se recibió con éxito.";
	    $type = "success";
	}
}
require_once "send_form.php";
?>