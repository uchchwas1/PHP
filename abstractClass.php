<?php
//Abstract Classes and Method
abstract class Car{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    abstract public function intro() : string;  //Abstract method

}

class Volvo extends Car{
    public function intro() : string  {
        return "<br>This is $this->name class";
    }
}

class Audi extends Car{
    public function intro() : string{
        return "<br>this is $this->name class";
    }

    
}

abstract class ParentClass{
    protected abstract function prefix($name); //abstract class
}

class PrefixName extends ParentClass{
    public function prefix($name){
        if($name == 'uchchwas')
           $prefix = 'Mr. ';
        else if($name == 'anusree')
           $prefix = 'Mrs. ';
        else 
           $prefix = 'Not Found';
     return "{$prefix}{$name}";       
    }
}

$volvo = new Volvo('Volvo');
echo $volvo -> intro();
$audi = new Audi('Audi');
echo $audi -> intro();

$uchchwas = new PrefixName;
echo '<br>'.$uchchwas-> prefix('uchchwas');


?>