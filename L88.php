<!-- Constructor -->

<?php
class Car{
    public $name;

    function __construct($n){
        $this->name = $n;
    }
}

$car = new Car("BMW");
echo $car->name;
?>

<?php
class Person{
    function __construct(){
        echo "Object Created";
    }
}

$p = new Person();
?>