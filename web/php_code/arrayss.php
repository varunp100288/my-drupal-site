<?php

$nids = array("one", "two", "three");

var_dump($nids);

$x = "Hello world!" ."<br>";
$y = 10;
var_dump($x);
// var_dump($y);

if(isset($y)) {
    var_dump($y);
} else {
    echo "\$y is not set";
}