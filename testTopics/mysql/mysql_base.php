<?php

use testTopics\mysql\DbHandler;

$dbConnection = new DbHandler();
// $dbConnection->createUser();
// $dbConnection->createPet('zvrki');
$users = $dbConnection->getUsers();
// $user = $dbConnection->getUser(3);

echo '<pre>';
var_dump($users);
echo '</pre>';