<?php
class Person{
    private $name; 
    
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

}

$obj = new Person();
$obj->setName("Varun");
// $obj->setName("");
echo $obj->getName();