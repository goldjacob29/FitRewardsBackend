<?php
	require('../vendor/autoload.php');
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	$nonce = $_POST['nonce'];
	echo($nonce);
?>