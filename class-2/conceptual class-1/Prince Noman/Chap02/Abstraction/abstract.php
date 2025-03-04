<?php

// Abstract Class -> You cannot instantiate a object of an abstract class but you can inherit from it
// Any class that contains at least one abstract method must also be declared as an abstract class
// Methods defined as abstract simply declare the method's signature [only the method name]; they cannot define the implementation.

abstract class Vehicle
{
    abstract public function getBaseFare();
    abstract public function getPerKiloFare();

    public function getTotal(  $kilo )
    {
        return $this->getBaseFare() + ( $this->getPerKiloFare() * $kilo );
    }
}

class Car extends Vehicle
{
    public function getBaseFare()
    {
        return 100;
    }
    public function getPerKiloFare()
    {
        return 20;
    }
}

class Bike extends Vehicle
{
    public function getBaseFare()
    {
        return 80;
    }
    public function getPerKiloFare()
    {
        return 10;
    }
}

$car = new Car();
echo $car->getTotal( 2 );
