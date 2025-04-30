<?php

$x = 5;

function myTest() {
    $x = 10;
    echo "value of x is " . $x ."<br>";
}
myTest();
echo "the value of x is global " . $x ."<br>";


$x = 50;
$y = 10;

function myTest1($a, $b) {
//   global $x, $y;
//    global $x;
//    global $y;
    global $x, $y;
  $c = $a + $b;
  echo $c ."<br>";
}

myTest1(2,4);
echo $y; 