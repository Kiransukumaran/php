<?php
$studentMarks = array(
	68, 70, 72, 49, 60, 79, 82, 73, 75, 77, 58, 73, 63, 79, 78,
	68, 72, 73, 80, 34, 68, 72, 56, 23, 73, 45, 24, 85, 89,83
	);

$count = count($studentMarks);
echo "\nThe total numer of students:$count\n";

$sum = array_sum($studentMarks);
$average = $sum / $count;
echo "\naverage mark :$average \n";
$highest = max($studentMarks);
$lowest = min($studentMarks);
echo "\nhighest is :$highest\nminimum value :$lowest\n";

sort($studentMarks);
echo "\nbottom 5 elements\n";
print_r(array_slice($studentMarks,0,5));
echo "\ntop 5 elements\n";
print_r(array_slice($studentMarks,-5,$count-1));

echo "\nstudents with mark lower than 50\n";
for ($i=0; $i < $count; $i++) {
    if ($studentMarks[$i]<50) {
        echo "$studentMarks[$i]". "\n";
    }
}
?>