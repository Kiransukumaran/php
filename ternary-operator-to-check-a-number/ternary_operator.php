<?php
/*php script to check wheather the number is greater than 30 or not using ternary operator*/ 
echo "enter the number";
$var = readline();
$var_is_greater_than_thirty = ($var >= 30 ? true : false);
if ($var_is_greater_than_thirty === true) {
  echo "\nnumber is greater than or equal to 30\n";	
}
else
{
  echo "\nnumber is less than 30\n";
}
?>