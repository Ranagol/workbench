<!DOCTYPE html>

<!-- <?php
// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?> -->









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

    <!-- <button @click="returnHello">Button</button> -->


        <?php
            // if(!isset($_COOKIE[$cookie_name])) {
            //     echo "Cookie named '" . $cookie_name . "' is not set!";
            // } else {
            //     echo "Cookie '" . $cookie_name . "' is set!<br>";
            //     echo "Value is: " . $_COOKIE[$cookie_name];
            // }
        ?>

        <?php
            // Set and display session variables
            // $_SESSION["favcolor"] = "green";
            // $_SESSION["favanimal"] = "cat";
            // echo "Session variables are set. <br>";
            // var_dump($_SESSION);
            // echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            // echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>";
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="myJavaScript.js"></script>
</body>
</html>