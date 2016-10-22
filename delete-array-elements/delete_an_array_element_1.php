<?php
/*delete an element from array using array_search and unset*/ 
$color = array('white', 'green', 'red', 'blue', 'black');
$search = "red";
$key = array_search($search, $color);
echo "\nvalue is in pos : $key\n";
unset($color[$key]);
var_dump($color);
?>