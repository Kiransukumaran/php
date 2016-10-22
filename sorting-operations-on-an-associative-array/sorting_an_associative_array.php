<?php

/*sorting both keys and values in ascending and descending order*/ 
$arrayvalues=array("Sophia"=>"31",
	"Jacob"=>"41",
	"William"=>"39",
	"Ramesh"=>"40");
/*ascending order sorting*/

echo "\nsorting array in ascending order by value\n";
$sortedarrayascendingvalue = $arrayvalues;
sort($sortedarrayascendingvalue);
var_dump($sortedarrayascendingvalue);

echo "\nascending order sort by key";
$sortedarrayascendingkey = $arrayvalues;
ksort($sortedarrayascendingkey);
var_dump($sortedarrayascendingkey);

/*descending order*/ 
echo "\nsorting array in descending order by value\n";
$sortedarraydescendingvalue = $arrayvalues;
rsort($sortedarraydescendingvalue);
var_dump($sortedarraydescendingvalue);

echo "\nsorting array in descending order by value\n";
$sortedarraydescendingkey = $arrayvalues;
krsort($sortedarraydescendingkey);
var_dump($sortedarraydescendingkey);
?>