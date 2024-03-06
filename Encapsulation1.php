<?php 

class Man {
    public $name;
    public $age;
    protected $gender;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

  
}

class Woman extends Man {
    public function __construct($name, $age, $gender) {
        parent::__construct($name, $age);
        $this->gender = $gender; // Now you can set the gender because it's inherited from Man
    }
    public function getGender() {
        return $this->gender;
    }
}

// Example usage
$woman = new Woman("Alice", 30, "Female");
echo "Name: " . $woman->name . ", Age: " . $woman->age . ", Gender: " . $woman->getGender();
