<?php

//code1:

/*

Interface Mammal{
    public function makeSound();
    public function sleep();
}


abstract class Animal implements Mammal{
    public $color;
    public function makeSound(){

    }

    public function sleep(){
        echo "Sleeping";
        
    }
}


class Dog extends Animal{

    public function makeSound(){
        echo "Woof Woof";

    }

}

$puppy = new Dog();
echo $puppy->sleep();

*/


//code2:

Interface Mammal{
    public function makeSound();
    public function sleep();
}


abstract class Animal implements Mammal{
    public $color;
    public function makeSound(){

    }

    public function sleep(){
        echo "Sleeping\n";
        
    }
}


class Dog extends Animal{

    public function makeSound(){
        echo "Woof Woof\n";

    }

}


class Cat extends Animal{

    public function makeSound(){
        echo "Meow Meow";

    }

}

$puppy = new Dog();
echo $puppy->sleep();


$cat = new Cat();
echo $cat->makeSound();