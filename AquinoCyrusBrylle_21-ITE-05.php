<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Person {
    public $lastName;
    public $firstName;
    private $age;

    function __construct($lastName, $firstName, $age) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }

    function getFullname() {
        return $this->lastName . " " . $this->firstName;
    }
    
    function setAge($age) {
        $this->age = $age;
    }

    function getAge() {
        return $this->age;
    }
}

class Car {
    public $make;
    public $model;
    protected $year;

    function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function getCarInfo() {
        return $this->make . " " . $this->model . " " . $this->year;
    }
}

// Create a Person object
$student = new Person("Aquino", "Cyrus", 19);
echo "<p>Full Name: " . $student->getFullname() . "</p>";
echo "<p>Age: " . $student->getAge() . "</p>";

// Update age
$student->setAge(20);
echo "<p>Updated Age: " . $student->getAge() . "</p>";

// Create a Car object
$kotse = new Car("Lamborghini", "Huracan", 2017);
echo "<p>Car Info: " . $kotse->getCarInfo() . "</p>";
?>
</body>
</html>