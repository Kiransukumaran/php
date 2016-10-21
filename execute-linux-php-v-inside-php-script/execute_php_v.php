<?php
/*php version printing using php script and linux command*/
 /*output is strored in an array and printing it*/ 
$response = array();
exec('php -v', $response);
echo "$response[0]";
?>