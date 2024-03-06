<?php 
class Man{
    public function makesound(){
      echo "Man makes sound talk ". PHP_EOL;
}
}
class Dog extends Man{
    public function makesound(){
       echo "Dog sound is  barks ". PHP_EOL;
    }
}
    class Cat extends Man{
        public function makesound(){
          echo "Cat sound is  meows". PHP_EOL;
}
    }
    $man = new Man();
    $man->makesound();

    $dog = new Dog();
    $dog->makesound();

    $cat = new Cat();
    $cat->makesound();