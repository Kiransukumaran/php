<?php
/*change values of array to upper and lower case*/ 
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo "\nvalues are in lower case\n";
$tolower=array_map('strtolower', $color);
print_r($tolower);
echo "\nvalues are in upper case\n";
$toupper=array_map('strtoupper', $color);
print_r($toupper);
?>