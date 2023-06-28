<!DOCTYPE html>

<?php

    /**
     * Here we create cookies (php means that the creating is done on the server). The created
     * cookies will be stored in the browser, here: inspect/application/cookies.
     * Be careful with this below, because when uncommented, it creates this error:
     * PHP Warning:  Cannot modify header information - headers already sent by 
     * (output started at D:\\_CODE\\workbench\\myHtml.php:1) in 
     * D:\\_CODE\\workbench\\myHtml.php on line 11
     */
    // $cookie_name = "user";
    // $cookie_value = "John Doe";
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- My custom CSS link -->
    <link rel="stylesheet" href="style.css">
    <title>Workbench</title>
</head>

<body>
    <div class="container p-5" id="app" >
        <h2 class="page-title">Workbench</h2>

        <p>Awesome, the page works!</p>

        <h3 class="pt-3 pb-3">PHP learning</h3>

        <?php 

            /**
             * So, here we play with superglobals. We want to send POST data to the server
             * from the browser, and catch this data with the superglobal variables.
             */
            require 'testTopics/form.html'; 
        ?>

        <h3 class="pt-3 pb-3">JavaScript learning</h3>
        <p>

        </p>

    </div>
    
    <!-- Vue is connected into this app -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->

    <!-- My JS script is connected in this app. -->
    <script src="myJavaScript.js"></script>
</body>
</html>