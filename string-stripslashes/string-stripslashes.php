<?php
/*slashes from string is removed by stripslashes() method*/ 
$str = "Is your name O\'reilly?";
$stringwithoutslash = stripslashes($str);
echo "\nstring after removing slashes\n";
echo "$stringwithoutslash"."\n";
?>