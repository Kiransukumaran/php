<?php
/*php script to check wheather a string is palindrome or not*/ 

echo "\nenter the string to check palindrome or not\n";
$string=readline();

/*
*function to check palindrome
*@param string
*@return null
*/

function palindromeornot($string)
{
	if ($string==strrev($string)) {
		echo "\nstring is palindrome\n";
	}
	else{
		echo "\nstring is not palindrome\n";
	}
}
palindromeornot($string);
?>