<?php
	require('../vendor/autoload.php');
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	header("Access-Control-Allow-Headers: X-Requested-With");
	$nonce = $_POST['nonce'];
	echo($nonce);
?>