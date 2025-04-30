<?php

class Fruit{

    public $name;
    public $color;
    public function __construct($myname){
        $this->name = $myname;
    }

  

}
$fruit = new Fruit("apple");
echo $fruit->name;