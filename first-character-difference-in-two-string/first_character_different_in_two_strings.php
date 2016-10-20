<?php
$string1 = "football";
$string2 = "footboll";
$position = strspn($string1 ^ $string2, "\0");
echo "\nFirst difference between two strings at position $position: \"$string1[$position]\" vs \"$string2[$position]\"\n";
?>