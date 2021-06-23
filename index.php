<?php

//in case if all classes are in the /classes folder
spl_autoload_register('myAutoloader');
function myAutoloader($className){
    include 'classes/' . $className . '.php';
}

// Start the session
session_start();

$t = 10;
$x = 20;

echo $t * $x;

$a = $t;


require 'myHtml.php';
require 'testingPlace.php';