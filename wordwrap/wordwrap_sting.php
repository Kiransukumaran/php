<?php
/*words are wraped using wordwrap function*/
/*20 character per line so delimited by \n*/ 
$text = "Word wrap will split this text up into smaller lines,which makes for easier reading and neater layout.";
$newtext = $newtext = wordwrap($text, 20, "\n", true);
echo "wrapped string as \n";
echo "$newtext";
?>
