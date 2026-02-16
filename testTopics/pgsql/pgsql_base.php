<?php

use testTopics\pgsql\DbHandler;

/**
 * /Connection object
 */
$dbConnection = new DbHandler();

/**
 * Creating a new user
 */
// $dbConnection->createUser();

/**
 * Creating a new pet
 */
// $dbConnection->createPet();

/**
 * Listing all users
 */
$users = $dbConnection->getUsers();

/**
 * Getting one specific user
 */
// $user = $dbConnection->getUser(3);

// echo '<pre>';
// var_dump($user);
// echo '</pre>';