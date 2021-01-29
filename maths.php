<?php
function absolute (){
  $x = -1;
  return abs($x) . "<br>";
}
echo absolute();

function roundUp(){
  $x = 2.3;
  return  ceil($x) . "<br>";
}

echo roundUp();

function highestValue($arr){
  return max(($arr));
};
function minValue($arr){
  return min($arr);
}

$x = highestValue([1,2,3,10,485,0]);
echo "$x <br>";
$y = minValue([1,2,3,10,485,0]);
echo "$y <br>";

function random (){
  return mt_rand(10,100);
}
$z = random();
echo "$z <br>";