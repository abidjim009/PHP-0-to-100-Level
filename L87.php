<!-- Class and Object with Methods -->

<?php
class Student{
    function show(){
        echo "Student Information";
    }
}

$s = new Student();
$s->show();
?>

<?php
class Calculator{
    function add($a,$b){
        return $a + $b;
    }
}

$c = new Calculator();
echo $c->add(5,3);
?>