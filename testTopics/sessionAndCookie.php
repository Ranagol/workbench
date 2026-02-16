<?php

/**
 * In this php file we set some random cookies and some random session values. Then we access 
 * these values through the $_COOKIE and $_SESSION superglobals.
 */

//COOKIES *******************************************

/**
 * Cookie settings.
 */
$cookie_name = "cookie_nameeeeee";
$cookie_value = "John Doe";
$expiry = time() + 100;//we want this cookie to last 100 seconds.time() returns the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
$path = '/';//The path on the server in which the cookie will be available on. If set to '/', the cookie will be available within the entire domain.
setcookie($cookie_name, $cookie_value, $expiry, $path);

//cookie checking
var_dump($_COOKIE);//array(3) { ["PHPSESSID"]=> string(26) "gno0hnbme16jl4in1m3lvik3f9" ["user"]=> string(8) "John Doe" ["XDEBUG_SESSION"]=> string(14) "XDEBUG_ECLIPSE" }



//SESSION *******************************************

// Start the session (this should be at the very beginning of the index.php, not here!)
session_start();

//session value settings
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

//session value displaying
var_dump($_SESSION);//array(4) { ["favcolor"]=> string(5) "green" ["favanimal"]=> string(3) "cat" ["fileLocation"]=> NULL ["message"]=> string(0) "" }

