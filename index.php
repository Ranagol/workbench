<?php

/**
 * Activates the app and the autoloader.
 */
require __DIR__ .'/vendor/autoload.php';

/**
 * With these require lines I can turn on and off some experimental features of the app.
 */
require 'testTopics/header-testing.php';
require 'myHtml.php';
require 'testTopics/testingPlace.php';
// require_once 'testTopics/pgsql/pgsql_base.php';//for postgres

// require 'testTopics/supeglobals.php';
// require_once 'testTopics/mysql/mysql_base.php';//for mysql
// require 'testTopics/drawing/drawing.php';
// require 'testTopics/xml.php';
// require 'testTopics/fizzBuzz.php';
// require 'testTopics/sessionAndCookie.php';
// require 'testTopics/fileHandling.php';