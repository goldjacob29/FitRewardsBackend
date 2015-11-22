<?php
	require('../vendor/autoload.php');
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	header("Access-Control-Allow-Headers: DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type");
	$nonce = $_POST['nonce'];
	echo($nonce);
	echo("EXXTRA!");
?>