<?php
/*
*converting string into following
*1.first letter of sentence as uppercase using ucfirst
*2.each word's starting character as uppercase using ucwords
*3.whole string into upper case using strtoupper
*/ 
$input = "joey tribbiani";
$output1 = ucfirst($input);
$output2 = ucwords($input);
$output3 = strtoupper($input);
echo "outputs as\n";
echo "\n$output1\n";
echo "\n$output2\n";
echo "\n$output3\n"; 
?>