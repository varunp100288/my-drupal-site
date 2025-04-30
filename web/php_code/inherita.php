<?php

class Animal{

protected $name;

// public function __construct($name){
//     $this->name = $name;
// }
public function setName($name){
    $this->name = $name;
}

public function getName(){
    return $this->name;
}

}
$dog = new Animal();
$dog->setName("HINDI KA SITARA");
echo $dog->getName();