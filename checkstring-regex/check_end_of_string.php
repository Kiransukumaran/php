<?php
/*check if the string ended with .com*/
$email = "test@test.com";
$status=preg_match('/.com/', $email);
if ($status) {
	echo "\nThe text ends with .com\n";
}
else
{
	echo "\nThe text not ends with .com\n";
}
?>
