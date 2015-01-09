<?php
include "config.php";
	include "lib/jsonRPCClient.php";
	include "lib/Crypto.php";


	$crypt = new Crypto_API($integrity_check, $settings, $server);

	if ($crypt->open_connection()) {
        //create and display new address with label 'label'
	echo $crypt->generate_new_address('label');
	}else {
		echo 'wallet conection error';
	}

?>