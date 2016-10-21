<?php
/*find out wheather a word present in a string(case insensitive search)*/
$text = "There is no installation needed to use these function; they are part of PHP core";
echo "\nenter the string to check\n";
$string = readline();
$status=stristr($text,$string,true);
if ($status !== false) {
	echo "$string found\n";
}
else
{
	echo "not found\n";
}
?>