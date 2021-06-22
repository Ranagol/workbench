<?php

//in case if all classes are in the /classes folder
spl_autoload_register('myAutoloader');
function myAutoloader($className){
    include 'classes/' . $className . '.php';
}

// Start the session
session_start();

require 'myHtml.php';
require 'testingPlace.php';