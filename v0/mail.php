<?php
	$msg = 'demandeur : '.$_POST["name"].' / Type : '.$_POST["type"].' / adresse mail : '.$_POST["email"].' / msg : '.$_POST["msg"];
	
	/*$to = "pierre.thiebert@outlook.fr";
	$subject = "Demande de devis";

	$message=$msg;

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

	mail($to, $subject, $message, $headers);*/
	header('location:felicitation.php');
?> 