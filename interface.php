<?php
interface Animal{
    public function makesound();
}

class Cat implements Animal{
  public function makesound(){
      return 'Mewoo';
  }
}

class Dog implements Animal{
  public function makesound(){
    return 'Bark';
  }
}


$cat = new Cat();
echo '<br>'.$cat->makesound();
$dog = new Dog();
echo '<br>'.$dog->makesound();

?> 