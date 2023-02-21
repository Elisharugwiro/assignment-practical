<?php
// variables to be swapped
$fnum = 5;
$snum = 10;

// before swapping
echo "Before swapping: " . "num1 = " . $fnum . ", num2 = " . $snum . "<br>";

$tempval = $fnum;
$fnum = $snum;
$snum = $tempval;

// after swapping
echo "After swapping: " . "fnum = " . $fnum . ", snum = " . $snum . "<br>";
?>