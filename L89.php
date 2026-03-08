<!-- Inheritance -->

<?php
class Animal{
    function sound(){
        echo "Animal sound";
    }
}

class Dog extends Animal{}

$d = new Dog();
$d->sound();
?>


<?php
class Vehicle{
    function run(){
        echo "Vehicle running";
    }
}

class Bike extends Vehicle{}

$b = new Bike();
$b->run();
?>