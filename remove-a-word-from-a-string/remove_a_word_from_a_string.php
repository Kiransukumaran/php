<?php
$text = "Consider following code";
echo "before chopping\n";
echo "$text\n";
$removestring = "code";
$output = chop($text,$removestring);
echo "\nafter chopping\n";
echo "$output\n";
?>