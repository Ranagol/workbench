<?php

//https://www.phptutorial.net/php-tutorial/php-open-file/



/**
 * BASIC FILE OPENING AND READING
 * 
 * $filePointer = fopen('/logs/logs.txt', 'a+');//the relative path file opening is not working!!!!!!!
 */
$fileNameWithPath = 'D:\_CODE\workbench\testTopics\logs\logs.txt';////we must use absolut paths for fopen() files. This contains: Monday Tuesday Wednesday
$filePointer = fopen($fileNameWithPath, 'a+') or die ("Unable to open file!");//opening a file
echo fread($filePointer, filesize($fileNameWithPath));//Monday Tuesday Wednesday. So fread() will get the file content into one string.
echo '<br>';
echo '<hr>';


/**
 * Writing into a file.
 */
$txt = "John Doe2\n";
fwrite($filePointer, $txt);//writing into a file
fclose($filePointer);//closing a file


/**
 * DOWNLOADING A COMPLETE WEBPAGE
 */
// $html = file_get_contents('https://protechnic.rs/sr/o-nama.html');
// echo $html;

//EXPRESS FILE READING INTO A STRING
$content = file_get_contents($fileNameWithPath);
var_dump($content);
echo '<br>';
echo '<hr>';

/**
 * GETTING DATA FROM FILE, LINE BY LINE INTO AN ARRAY
 */
// $fileNameWithPath = 'D:\_CODE\workbench\logs\logs.txt';//we must use absolut paths for fopen() files.
$fileNameWithPath = 'testTopics\logs\logs.txt';//we must use absolut paths for fopen() files.

$filePointer = fopen($fileNameWithPath, 'a+') or die ("Unable to open file!");//opening a file
$lines = [];
try {
	while (!feof($filePointer)) {//feof() tests if the end-of-file has been reached.
		$lines[] = fgets($filePointer);
	}
    echo '<pre>';
    var_dump($lines);
    echo '</pre>';
} catch (\Throwable $e) {
	echo $e->getMessage();
} finally {
	if ($filePointer) {
		fclose($filePointer);
	}
}


