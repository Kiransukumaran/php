<?php
$cities = array(
	"Itanagar",
	"Dispur",
	"Patna",
	"Panaji",
	"Raipur",
	"Gandhinagar",
	"Srinagar",
	"Bangalore");
function printAnArray($cities)
{
	$i=0;
	$count=count($cities);
	$last = $count-1;
	for( $i= 0; $i < $count ; $i++)	
	{
	if($i < $last)
	{
		echo "$cities[$i]".",";
	}
	else
	{
	 	echo "$cities[$i]";	
	}
	}
}

/*print array items sperated by comma*/
echo "\ncities as follow\n";
printAnArray($cities);

/*add more cities to array*/
array_push($cities,"Thiruvananthapuram");
array_push($cities,"Bhopal");
array_push($cities,"Mumbai");
array_push($cities,"Bangalore");
array_push($cities,"Raipur");
$cities=array_unique($cities);
sort($cities);
echo "\n";
echo "\nafter sorting and ignore duplicates\n";
echo "\n";
printanarray($cities);
echo "\n";
?>