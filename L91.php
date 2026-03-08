<!-- Static Methods -->

<?php
class Math{
    static function add($a,$b){
        return $a+$b;
    }
}

echo Math::add(4,6);
?>

<?php
class Test{
    public static $count = 0;
}

echo Test::$count;
?>