<?php

//echoing a php file that contains an image and nothing else
echo "<img src=testTopics/drawing/rectangle.php>";//we must use absolut path for echoing the right image

//GETTING IMAGE WIDTH AND HEIGHT
$img = imagecreatetruecolor(300, 200);// create a 300*200 image
echo imagesx($img);//300
echo imagesy($img);//200
