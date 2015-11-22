<?php
	require('../vendor/autoload.php');
	Braintree_Configuration::environment('sandbox');
	Braintree_Configuration::merchantId('vy8vxfry49ydvw6x');
	Braintree_Configuration::publicKey('ghhmmmsctxvbkz7m');
	Braintree_Configuration::privateKey('72d92b61ab66470d32e9b2dda5d2caf2');
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	header("Access-Control-Allow-Headers: DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type");
	$nonce = $_POST['nonce'];

	$result = Braintree_Transaction::sale([
	  'amount' => '100.00',
	  'paymentMethodNonce' => $nonce
	]);
	echo($result);
?>