<?php
$d = date("l");

if ($d == "Monday") {
  echo "Today is Monday <br>";
} else {
  echo "Today is not Monday <br>";
}

$m = date("m");
if($m == "October"){
  echo "We are in October <br>";
} else{
  echo "We are not in October<br>";
}

$min = date("i");
if($min < 10){
  echo "the current minute is less than 10 <br>";
} elseif($min > 15){
  echo "the current minute is more than 15 <br>";
} else{
  echo "doesn't meet any conditions <br>";
}


switch ($d) {
  case "Monday":
    echo "Today is $d <br>";
    break;
  case "Tuesday":
    echo "Today is $d <br>";
    break;
  case "Wednesday":
    echo "Today is $d <br>";
    break;
  case "Thursday":
    echo "Today is $d <br>";
    break;
  case "Friday":
    echo "Today is $d <br>";
    break;
  case "Saturday":
    echo "Today is $d <br>";
    break;
  case "Sunday":
    echo "Today is $d <br>";
    break;
}
?>