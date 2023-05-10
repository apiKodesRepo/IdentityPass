<?php
require_once('./vendor/autoload.php');
require('./config.php');

// If you specified a secret hash, check for the signature
$secretHash = "FLUTTERWAVE_SECRET_HASH";
$signature = $request->header('verif-hash');
if (!$signature || ($signature !== $secretHash)) {
    // This request isn't from Flutterwave; discard
    return false;
}
$payload = $request->all();
// It's a good idea to log all received events.
// we can save the payload to our database here 



// Do something (that doesn't take too long) with the payload
return true;