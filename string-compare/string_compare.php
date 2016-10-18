<?php
/*two strings are compared,by using a function and also check If strings are equal or not*/
/*
* @param void 
* @return result
*/ 
function stringcomp()
{
	$string1="Hello world";
	$string2="Hello world";
	$result = strcmp($string1,$string2);
	return($result);
}
$status=stringcomp();
if ($status==0) {
	echo "\nTwo stings are equal\n";
}
else
{
	echo "\nTwo strings are no equal\n";
}
?>