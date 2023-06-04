<?php

/**
 * In the rectangle.php we create a ... rectangle image, with php. And here we just display it with
 * echo command. We must use absolut path for echoing the right image
 */
echo "<img src=testTopics/drawing/rectangle.php>";

/**
 * GETTING IMAGE WIDTH AND HEIGHT of the just created image.
 */
$img = imagecreatetruecolor(300, 200);// create a 300*200 image
echo imagesx($img);//300
echo imagesy($img);//200
