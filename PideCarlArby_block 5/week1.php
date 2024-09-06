<?php

class Person {
  
  private $fullName;
  private $age;
  private $car;

  function __construct($fullName, $age, $car) {
    $this->fullName = $fullName;
    $this->age = $age;
    $this->car = $car;
  }

  function getFullName() {
    return $this->fullName;
  }

  function getAge() {
    return $this->age;
  }
  function updateAge() {
    // Increment the current age by 1
    $this->age += 1;
  }

  function getCar() { 
    return $this->car;;
  }
}

$person = new Person("Jhon Doe", 25, "Toyota Camry (2020)");

echo "Full Name: " . $person->getFullName() . "\n";
echo "Age: " . $person->getAge() . "\n";
$person->updateAge();
echo "Updated Age: " . $person->getAge() . "\n";
echo "Car Info: " . $person->getCar() . "\n";
echo "\n";

?>