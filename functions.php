<?php

function sum ($a, $b){
  return $a + $b;
}

echo sum(3,5) . "<br>";

function mul ($a, $b){
  return $a * $b;
}

echo mul(3,5) . "<br>";

function div ($a, $b){
  return $a / $b;
}

echo div(3,5) . "<br>";

function oper($a, $b, $operator){
  switch($operator){
    case "+":
      return sum($a, $b);
      break;
    case "-":
      return $a - $b;
      break;
    case "*":
      return mul($a,$b);
      break;
    case"/":
      return div($a,$b);
      break;
  }
}

echo oper(3,5, "/") . "<br>";


function add($a, $b) { return $a+$b; }
function sub($a, $b) { return $a-$b; }
function mult($a, $b) { return $a*$b; }

function operation($a, $b, $operator) {
  return $operator($a, $b);
}

echo operation(3,5, "sub");
