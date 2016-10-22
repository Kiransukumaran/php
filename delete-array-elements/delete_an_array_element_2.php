<?php
/*delete an element from array using array_search and array_splice*/ 
$color = array('white', 'green', 'red', 'blue', 'black');
$search = "red";
$key = array_search($search, $color);
echo "\nvalue is in pos : $key\n";
array_splice($color, $key ,1);
var_dump($color);
?>