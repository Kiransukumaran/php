<?php
/*components of url */ 
$parseurl = parse_url("http://www.w3resource.com/php-exercises/php-basic-exercises.php");
echo "\nscheme:$parseurl[scheme]\n";
echo "Host:$parseurl[host]\n";
echo "Path:$parseurl[path]\n";
?>