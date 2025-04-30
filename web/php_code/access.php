<?php


class FruitTest{

    public $name;
    protected $color;
    private $price;

public function set_name( $name ){
        $this->name = $name;

}
public function set_color( $color ){
    $this->color = $color;
}
public function set_price( $price ){
    $this->price = $price;
}

public function get_price(){
    return $this->price;
}
public function get_color(){
    return $this->color;
}
// echo $mango->color = "Yellow";
}

$mango = new FruitTest();
echo $mango->name = "Mango";
 $mango->set_color("Yellow");
 $mango->set_price(100);

echo $mango->get_color();
echo $mango->get_price();