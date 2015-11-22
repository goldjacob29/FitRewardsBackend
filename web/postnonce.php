<?php
	require('../vendor/autoload.php');
	header("Access-Control-Allow-Origin: *");
	$nonce = $_POST['nonce'];
	echo("noncey");
	echo($nonce);
?>