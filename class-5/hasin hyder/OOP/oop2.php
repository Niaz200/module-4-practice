<?php

//code1:

/*

class Dog{

    public $color;

    public function makeSound(){
        echo "Woof woof";
    }


    public function sleep(){
        echo "I'm sleeping";
    }

   
}

class Cat{

    public $color;

    public function makeSound(){
        echo "Meow Meow";
    }

    public function sleep(){
        echo "I'm sleeping";
    }

   
}

class Fish{

    public $color;

    public function makeSound(){
        echo "I don't make a sound";
    }

   
}


$puppy = new Dog();
$puppy->color = "black";
echo $puppy->color;
echo "\n";
$puppy->makeSound();

*/


//code2:



class Dog{

    public $color;

    public function makeSound(){
        echo "Woof woof";
    }


    public function sleep(){
        echo "I'm sleeping";
    }

   
}

class Cat{

    public $color;

    public function makeSound(){
        echo "Meow Meow";
    }

    public function sleep(){
        echo "I'm sleeping";
    }

   
}

class Fish{

    public $color;

    public function makeSound(){
        echo "I don't make a sound";
    }

   
}


$kitten = new Cat();
$kitten->color = "white";
echo $kitten->color;
echo "\n";
$kitten->makeSound();