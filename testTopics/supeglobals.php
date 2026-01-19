<?php

/**
 * Here we catch the POST data sent from the browser, and display it.
 */
if (isset($_POST['userName'])) {
    var_dump($_POST['userName']);//Andor
    var_dump($_POST);// array(1) { ["userName"]=> string(5) "Andor" }
}

/**
 * Here we catch the GET data sent from the browser, and display it.
 */
if (!empty($_GET)) {
    var_dump($_GET);//array(2) { ["name"]=> string(5) "Andor" ["age"]=> string(2) "40" }
    echo '<br>Name: ' . $_GET['name'];//Name: Andor
    echo '<br>Age: ' . $_GET['age'];//Age: 40   
}








