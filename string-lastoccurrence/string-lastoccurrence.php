<?php
/*finding the last occurence of a string*/ 
$string = "The strchr() function find the postion of the last occurrence of a string with in another string.... ";
$search = "string";
$lastoccurence = strrchr($string,$search);
echo "$lastoccurence"."\n";
?>