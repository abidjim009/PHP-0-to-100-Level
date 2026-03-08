<!-- Encapsulation -->

<?php
class Bank{
    private $balance = 1000;

    function getBalance(){
        return $this->balance;
    }
}

$b = new Bank();
echo $b->getBalance();
?>

<?php
class User{
    private $name;

    function setName($n){
        $this->name = $n;
    }

    function getName(){
        return $this->name;
    }
}
?>