<?php
/*finding the string match and positon of it is printed using strpos() mrthod*/ 
$filename = "my_upgrade(1).zip";
$match = "my_upgrade";
$value = strpos($filename, $match) ;
/*if strpos returns a status as false then string is not matched,else it shows matches and position is also printed */ 
if ($value === false) {
	echo "\nstring $match is not present\n";
}
else
{
	echo "\nstring $match is present at $value\n";
}
?>