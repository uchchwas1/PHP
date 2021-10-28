<?php
class Car{
    public $name;
    public $model;
    public $price;

    public function __construct($name, $model, $price){
        $this->name = $name;
        $this->model = $model;
        $this->price = $price;    
    }

    public function toString(){
        return '<br>Car name: '.$this->name.'<br>Car model No: '.$this->model.'<br>Car price: '.$this->price;
    }

    
}

$myCar = new Car('BMW', 'X-series', 2500);
echo $myCar ->toString();

?>

