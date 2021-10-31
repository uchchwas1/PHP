<?php
class Fruit{
    private $name;
    private $price;
    private static $numberOfObj;
    const message = 'I am in constructor';

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
        self::$numberOfObj++;
        echo '<br>'.self::message;
    }

    public function setName($name){
        $this->name =  $name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getNumberOfObj(){
         return self::$numberOfObj;
    }
// Call protected method from within derived class - OK
    protected function toString(){
        echo '<br>The item name: '.$this->getName().'</br>The item price is : '.$this->getPrice();
    }


}

class Drinks extends Fruit{

    private $weight;

    // public function __construct($name, $price){
    //      $this->name = $name;
    //      $this->price = $price;
        
    // }
//Overriding Inherited Methods
    public function __construct($name, $price, $weight){
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        echo '<br>'.self::message;
    }
    public function getNameAndPrice(){
        $this-> toString(); //Inheritance
    }

    public function varAccessForTwo(){
        echo '<br>Drinks name: '.$this->getName().'<br>Drinks price: '.$this-> getPrice(); //Inheritance
    }

    public function varAccessForThree(){
        echo '<br>Drinks name: '.$this->name.'<br>Drinks price: '.$this-> price.'<br>Drinks weight: '.$this->weight; 
    }

}
//The final keyword can be used to prevent class inheritance or to prevent method overriding
Final class canotInherit{
    private $name;

    public function __construct($name){
        $this-> name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(){
        $this-> name = $name;
    }

    public function toString(){
        echo '<br>the name of Cannot Inherit function is: '.$this->getname();
    }
}

$mango = new Fruit('mango', 200);
$apple = new Fruit('apple', 500);
$banana = new Fruit('banana', 100);
$orange = new Fruit('orange', 300);
echo '<br>The fruit name: '.$mango->getName().'</br>The fruit price is : '.$mango->getPrice();
echo '<br>The fruit name: '.$apple->getName().'</br>The fruit price is : '.$apple->getPrice();
echo '<br>The fruit name: '.$banana->getName().'</br>The fruit price is : '.$banana->getPrice();
echo '<br>The fruit name: '.$orange->getName().'</br>The fruit price is : '.$orange->getPrice();
echo '<br>Total number of obj made :'.$apple->getNumberOfObj();
echo '<br>'.$apple instanceof Fruit;

// $cocacola = new Drinks('cocacola', 20);
// $cocacola->getNameAndPrice();
// $cocacola->varAccessForTwo();

$sprite = new Drinks('Sprite', 20, '250ML');
$sprite->varAccessForThree();

$notInherite = new canotInherit('testing');
$notInherite->toString();
