<?php
/*check wheather a entered string is prime or not*/
/*if number is less than 2 printed as neither prime or nonprime*/
/*if number is greater than equal to 2,checking if it is prime or not */ 
echo "enter the number";
$number=readline();
if($number<2)
{
  echo "neither prime or nonprimenumber \n"; 
}
/*
*function to check prime number
*@param number
*return status(value 0 indicate not prime and 1 for prime) 
*/
function primeornot($number)  
{  
 for($i=2; $i<$number; $i++)  
   {  
      if($number %$i ==0)  
        {  
           return 0;  
        }  
    }  
  return 1;  
}
if ($number>=2) {
  	$value=primeornot($number); 
  	if ($value==0)
  	{
  	  echo "This is not a Prime Number\n";  
  	}  
  	else
  	{
  	  echo "This is a Prime Number\n"; 	
  	} 
  }    
?>