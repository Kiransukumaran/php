<?php
/*search a value in an array and print it*/ 
$color = array('white', 'green', 'red', 'blue', 'black');
$key=array_search("red",$color);
echo "\n$color[$key] is at $key position\n";
?>
