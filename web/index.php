<?php

require('../vendor/autoload.php');
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('vy8vxfry49ydvw6x');
Braintree_Configuration::publicKey('ghhmmmsctxvbkz7m');
Braintree_Configuration::privateKey('72d92b61ab66470d32e9b2dda5d2caf2');

echo 'hello world';

echo($clientToken = Braintree_ClientToken::generate());

?>