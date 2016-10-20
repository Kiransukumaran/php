<?php
/*printing next character
*sampleinput="z"
*output="a"
*/
echo "\nenter the character\n";
$chr =readline();
echo "next character\n";
$next = ++$chr; 
if (strlen($next) > 1)
{
 $next = $next[0];
}
echo $next;
echo "\n";
?>