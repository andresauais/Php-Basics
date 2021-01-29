<?php
$sArray = ["Hello", "php", "!"];
echo "$sArray <br>";
$nArray = [1, 2, 3, 4, 5.5, 6.2, 7.3];
echo "$nArray <br>";
$mArray = [$sArray, $nArray];
echo "$mArray <br>";

echo count($sArray) . "<br>";
echo print_r(array_merge($sArray, $nArray)) . "<br>";
echo end($sArray) . "<br>";

array_push($nArray, 89);
print_r($nArray);