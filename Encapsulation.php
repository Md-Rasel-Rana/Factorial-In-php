<?php 
class Man{
    protected $name;
    private $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce(){
        return "My name is ".$this->name." and I am ".$this->age." years old.";
    }
}


  $myobj= new Man("John", 30);
  echo $myobj->introduce();