<?php

require('../vendor/autoload.php');
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('use_your_merchant_id');
Braintree_Configuration::publicKey('use_your_public_key');
Braintree_Configuration::privateKey('use_your_private_key');

echo 'hello world';

echo($clientToken = Braintree_ClientToken::generate());

?>