<?php
/*script reads a number and find the factorial using recursive function*/
/*if it is less than or equal to zero it rejects calculation*/ 
echo "enter the number";
$number=readline();
/*
*function to check prime number
*@param number
*@return status(value 1 indicate less than 2,else factorial is found) 
*/
function factorial($number) { 
    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
}
if ($number <= 0)
{
	echo "\nenter a positive integer\n";
}
$fact = factorial($number);
if ($fact==1) {
	echo "\nfactorial is 1\n";
}
else
{
	
	echo "\nfactorial of $number is $fact\n";
}
?>