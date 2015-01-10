Cryptocurrency wallet daemon PHP API
=============
Important Notice: Remember this is considered still in development phase, it is nearing production usage. Please help test this library!

###Credits
This script was originally created by Shane B.
https://github.com/Xenland/Bitcoin-Development-Kit

Imporved by Antoan Stoykov and iisurge

###Usage
At the top of each file you should put: 

    include_once 'includes/dbconnect.php';
    include "includes/cryptowallet-php-api/config.php";
    include "includes/cryptowallet-php-api/lib/jsonRPCClient.php";
    include "includes/cryptowallet-php-api/lib/Crypto.php";
    $crypt = new Crypto_API($integrity_check, $settings, $server);
    if ($crypt->open_connection()) {
    //Site here
    }else {
    echo 'Error connecting to wallet';
    }
    
To interact with wallet in site use: 

    $crypt->(function(params))
example:

    $crypt->generate_new_address($label);
    
The functions are:

    generate_new_address($label); //$label is optional, if none is set it will go under label ""
    gettransaction($hash);
    getaccount($address);
    set_tx_fee($amount_in_satoshi);
    validate_address($address);
    verify_message($address, $signature, $message);
    list_transactions($account, $count, $from); //$count is 9999999999999 by default and $from is 0 by default
    get_received_by_address($address, $minimum_confirmations); //$minimum_confirmations is 1 by default
    get_balance($label, $minimum_confirmations); //$minimum_confirmations is 1 by default
    move($fromLabel, $toLabel, $amount_in_satoshi);
    sendfrom($label, $send_to_address, $amount_in_satoshi);
    sendmany($label, $send_to_address);
    get_transaction($tx_id);
    satoshi_to_coin($satoshi_value);
    coin_to_satoshi($coin_amount);
     
    
    
    
  

###Purpose
Aimed at assisting in cutting down development time to integrate digital currency functionality into your PHP projects.

###List of benefits
* All math is done in integers instead of decimals or floating points to prevent precision rounding errors of any kind.
* Redundant checking to prevent stochastic situations from slipping past security measures.
* Simple API commands
* Does not rely on a database but if a database is used more features are available with out compromising security.
* Fast, Quick, Efficient

###PHP Requirements
* PHP5
* SSL support (if you're using HTTPS to communicate with your wallet)

###My Reddcoin Donation Address
    Rsurge4R9r1XWfPpkRMZ95p7AXsez7tFqw (iisurge)
    Ro9D17Q9E3vrSPZxKt5gePSE9dyCeqkkk2 (Antoan Stoykov)

###Bitcoin Donation Address
    13ow3MfnbksrSxdcmZZvkhtv4mudsnQeLh (Shane B.)

###License | AGPL
    You should have received a copy of the Affero General Public License.  
	If not, see http://www.gnu.org/licenses/agpl-3.0.html
