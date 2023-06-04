<!DOCTYPE html>

<?php

    /**
     * Here we create cookies (php means that the creating is done on the server). The created
     * cookies will be stored in the browser, here: inspect/application/cookies
     */
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Workbench</title>
</head>

<body>
    <div id="app">
        <h2 class="page-title">Workbench</h2>

        <p>Awesome, the page works!</p>

        <?php 

            /**
             * So, here we play with superglobals. We want to send POST data to the server
             * from the browser, and catch this data with the superglobal variables.
             */
            require 'testTopics/form.html'; 
        ?>

    </div>
    
    <!-- Vue is connected into this app -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->

    <!-- My JS script is connected in this app. -->
    <script src="myJavaScript.js"></script>
</body>
</html>