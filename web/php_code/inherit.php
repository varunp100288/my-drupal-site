<?php 

class Animal{
    public $name;
    protected $food = "veg";
    public function __construct($name){
        $this->name = $name;
    }

    public function makeSound(){
        return "some sound";
    }

}

class Dog extends Animal{ 
    public function getFood(){
        return $this->food;
    }  

    // $this->food = "veg";
    // overriding the method
    // public function makeSound(){ 
    //     return "bark";
    // }
}

$dog = new Dog("sheru");
echo $dog->name;
echo $dog->getFood();