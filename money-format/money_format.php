<?php
/*print 123.4 into money format as $ 123.40*/ 
$number = 123.4;
setlocale(LC_MONETARY, 'en_US.UTF-8');
echo money_format('%(#1n', $number)."\n";
?>