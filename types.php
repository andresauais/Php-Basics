<?php
$boolean = true;
echo gettype($boolean) . "<br>";
$integer = 1;
echo gettype($integer) . "<br>";
$float = 1.04;
echo gettype($float) . "<br>";
$string = "hello php";
echo gettype($string) . "<br>";
$array = [1,2,3,4,5];
echo gettype($array) . "<br>";
$null = NULL;
echo gettype($null) . "<br>";

class Fruit {
  public $name;
  public $weight;
}

$apple = new Fruit();
$apple->name = "Apple";
$apple->weight = 23;

echo gettype($apple) . "<br>";

?>