<?php
/*merge two array using array_merge() function*/ 
$color1 = array('white', 'green', 'red', 'blue', 'black');
$color2 = array('grey', 'pink');
$mergedarray=array_merge($color1,$color2);
var_dump($mergedarray);
?>