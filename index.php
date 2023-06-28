<?php

/**
 * Activates the app and the autoloader.
 */
require __DIR__ .'/vendor/autoload.php';

/**
 * With these require lines I can turn on and off some experimental features of the app.
 */
require 'testTopics/header-testing.php';
$x = 8;

/**
 * Sending POST and GET requests
 */
require 'myHtml.php';

/**
 * General testing place for testing php code locally
 */
require 'testTopics/testingPlace.php';

/**
 * Postgres connection testing + CRUD.
 */
// require_once 'testTopics/pgsql/pgsql_base.php';

/**
 * Working with superglobals, sending GET and POST data to the server from the browser.
 */
// require 'testTopics/supeglobals.php';

/**
 * Testing Mysql CRUD.
 */
// require_once 'testTopics/mysql/mysql_base.php';

/**
 * Working with php created images.
 */
// require 'testTopics/drawing/drawing.php';

/**
 * Working with XML data.
 */
// require 'testTopics/xml.php';

/**
 * The Fizzbuzz task for beginner programmers...
 */
// require 'testTopics/fizzBuzz.php';

/**
 * we set some random cookies and some random session values. Then we access 
 * these values through the $_COOKIE and $_SESSION superglobals.
 */
// require 'testTopics/sessionAndCookie.php';

/**
 * BASIC FILE OPENING, READING, WRITING
 */
// require 'testTopics/fileHandling.php';