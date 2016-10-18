<?php
/*padding string with ten character and 0 character is padded with extra*/ 
$number = 'AB123';
$paddedvalue=str_pad($number,10,"0");
echo "\nbefore padding count is $number\n";
echo "\nafter padding is $paddedvalue\n";
?>