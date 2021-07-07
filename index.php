<?php

//in case if all classes are in the /classes folder
spl_autoload_register('myAutoloader');
function myAutoloader($className){
    include 'classes/' . $className . '.php';
}











// require 'testTopics/supeglobals.php';
require 'myHtml.php';
require 'testTopics/testingPlace.php';
// require 'testTopics/drawing/drawing.php';
// require 'testTopics/xml.php';
// require 'testTopics/fizzBuzz.php';
// require 'testTopics/sessionAndCookie.php';
// require 'testTopics/fileHandling.php';