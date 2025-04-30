<?php

$myarr = array("String", ["object", "object2"], "myFun");

function myfun(){
    echo "hello from function";
    }
var_dump($myarr[1]);
echo $myarr[2]();
echo $myarr[1][0];

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars); // dump whole array 

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
var_dump($car); 