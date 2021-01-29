<?php
$x = "php";
echo "Hello php <br>";
echo "Hello $x <br>";
echo "Hello " .$x . "<br>";


echo str_ireplace("WORLD","Peter","Hello world! <br>");//replace regardless case sensitive
echo str_replace("world","Peter","Hello good world! <br>");//case sensitive
echo str_repeat("Hello <br>",5);//repeat
echo strlen("Hello") . "<br>";//lenght
echo strpos("I love php, I love php too!","I") . "<br>";//position of str
echo strtoupper("hello php <br>"); //capitalize
echo strtolower("HELLO PHP <br>"); //lower case
echo substr("Hello php",6);//get string in position