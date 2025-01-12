<?php

class Human
{
    public $name;
    public $age;

    public function __construct($personName, $personAge = 0)
    {
        echo "<br>";
        $this->name = $personName;
        $this->age = $personAge;
    }

    public function sayHi()
    {
        echo "Salam";
        echo "<br>";
        $this->sayName();
    }

    public function sayName()
    {
        if ($this->age) {
            echo "My name is {$this->name},
             I am {$this->age} years old.<br>";
        } else {
            echo "My name is {$this->name},
             I don't know how old I am.<br>";
        }
    }
}

// Create instances of the Human class
$h1 = new Human('Rubel', 21);
$h2 = new Human('Miraz', 42);
$h4 = new Human('Rakhi');

// Call methods
$h1->sayHi();
$h2->sayHi();
$h4->sayHi(); // Fixed: Changed from $h3 to $h4
