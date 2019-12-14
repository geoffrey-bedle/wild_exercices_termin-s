<?php


class Car
{

    public $hasParkBrake = false;

    public function setParkBrake()
    {
        if ($this->hasParkBrake == false) {
            $this->hasParkBrake = true;
        } else {
            $this->hasParkBrake = false;
        }
    }

    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Frein à main activé !");
        }
    }


}

$car = new Car();
$car->setParkBrake();

try {
    $car->start();
}catch (Exception $e){
    echo $e->getMessage() . '<br><br>';
    $car->setParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut';
}
$car->start();



