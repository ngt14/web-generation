<?php
    header('Content-Type: application/json');
	
	$mail = $_POST['mail'];
	$msg = $_POST['msg'];

	//mail('pierre.thiebert@outlook.fr', 'demande de devis', $msg);
	
	
	echo json_encode('success');
?>