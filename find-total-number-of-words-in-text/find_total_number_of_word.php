<?php
/*count number of words in a string using str_word_count*/ 
$text = "As an addendum to David's 10-Nov-2005 posting, remember that curly braces literally mean evaluate what's inside the curly braces so, you can squeeze the variable varaiable creation into one line, like this ";
$count = str_word_count($text);
echo "\ncount is: $count\n";
?>