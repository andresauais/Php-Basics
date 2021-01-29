<?php
for($i = 0; $i < 5; $i++){
  echo "This is a for loop $i <br>";
}

$array = [1, 2, 3, 4, 5];
foreach($array as $value){
  echo "foreach $value <br>";
}

$x = 5;
while($x > 0){
  echo "While loop $x <br>";
  $x--;
}

$y = 0;
do{
  echo "Do while loop $y <br>";
  $y++;
} while($y <5);