<?php
/*replace first string the to string that*/ 
$input = "the quick brown box jumps over the lazy dog";
$replace = "That";
$output=preg_replace('/the/',$replace, $input, 1);
echo "\noutput string as:\n";
echo "\n$output\n";
?>