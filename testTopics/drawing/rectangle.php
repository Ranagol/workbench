<?php

//CREATING A RECTANGLE - THIS WILL BE THE BASE IMAGE AND THE BASE FOR EVERY DOT COORDINATE
$rectangle = ImageCreate(300,300);//1. here we create our image by setting the width and the height
$background = imagecolorallocate($rectangle, 255, 0, 0);//2. set background color for our image, the first color after the imagecreate() automatically becomes the background color

//DRAWING A LINES IN THE WHITE RECTANGLE
$xa1 = 0;//every line has a starting dot and an ending dot. These dots are defined with coordinates. One dot has two coordinates. One line has four coorinates.
$ya1 = 0;
$xa2 = 300;
$ya2 = 300;
$yellow = imagecolorallocate($rectangle, 255, 255, 0);//3. setting the color for the line
$lineA = imageline($rectangle, $xa1, $ya1, $xa2, $ya2, $yellow);//4. creating the line

//TRANSFORMING PHP TO png image
header('Content-Type: image/png');//5. this 'transforms' our rectangle.php file into an image, it it signals to php server that the rectangle.php should be treated as image

//CREATING THE IMAGE
ImagePNG($rectangle);//6. this creates png file from our image