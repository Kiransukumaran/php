<?php
/*finding the substring count using substr_count() method*/
$input = "PHP - recursive acronym for PHP: Hypertext Preprocessor";
$searchstring = "PHP";
$count = substr_count($input, $searchstring);
echo "\nNumber of occurance of \"PHP\"\n";
echo "$count\n";
?>
