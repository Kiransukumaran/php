<?php
/*print the first element in an array by using key*/ 
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
foreach($color as $key){
    $first = $key;
    break;
}
echo "$first";
?> 