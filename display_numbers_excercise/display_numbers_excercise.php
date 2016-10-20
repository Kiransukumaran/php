<?php
/*print the pattern 1-2-3-4-5-6-7-8-9-10*/ 
$i=1;
echo "\n";
while( $i <= 10) { 
	if ( $i < 10) {
		echo "$i-";
	}
	else{
		echo "$i";
	}
	$i++ ;
  }
echo "\n";
?>