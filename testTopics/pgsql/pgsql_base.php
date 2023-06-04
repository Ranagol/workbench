<?php

use testTopics\pgsql\DbHandler;

$dbConnection = new DbHandler();
// $dbConnection->createUser();
$dbConnection->createPet('zvrki');
// $users = $dbConnection->getUsers();
// $user = $dbConnection->getUser(3);

// echo '<pre>';
// var_dump($user);
// echo '</pre>';