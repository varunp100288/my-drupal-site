<?php

class Fruit {
    public $name;
    public $color;

    public function setName( $myname ) {
        $this->name = $myname;
    }
    public function setColor( $mycolor ) {
        $this->color = $mycolor;
    }
}

$fruit = new Fruit();
echo $fruit->color = "green" . "<br>";
echo $fruit->name = "Apple";