<?php
/*generate random number with in a range*/ 
echo "\nenter the minimum value\n";
$minimum = readline();
echo "\nenter the maximum value\n";
$maximum = readline();
echo rand($minimum,$maximum)."\n";
?>