<?php
class Beverage {
    public $name;

    function __construct() {
        echo "New beverage was created.<br />";
    }

    function __clone() {
        echo "Exisiting beverage was cloned.<br />";
    }
}

$a = new Beverage();
$a->name = "coffee";
$b = $a; // always a reference with objects
$b-> name = "tea";
echo $a->name ."<br />";

$c = clone $a;
$c->name = "orange juice";
echo $a->name ."<br />";
echo $c->name ."<br />";
?>
