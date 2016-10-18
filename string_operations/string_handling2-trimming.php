<?php
/*avoiding spaces using trim method*/ 
$input1 = "    PHP    ";
$input2 = "PHP    ";
$input3 = "    PHP";
$output1 = trim($input1);
$output2 = rtrim($input2);
$output3 = ltrim($input3);
echo "$output1";
echo "$output2";
echo "$output3";
?>

