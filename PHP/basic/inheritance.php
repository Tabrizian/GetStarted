<?php

class Car {
    var $wheels = 4;
    var $doors = 4;

    function wheelsdoors() {
        return $this->wheels + $this->doors;
    }
}

class CompactCar extends Car {

}

$car1 = new Car();
$car2 = new CompactCar();

echo $car1->wheels . "<br />";
echo $car1->wheels . "<br />";
echo $car1->wheelsdoors() . "<br />";
echo "<br />";

echo $car2->wheels . "<br />";
echo $car2->wheels . "<br />";
echo $car2->wheelsdoors() . "<br />";
echo "<br />";
?>
