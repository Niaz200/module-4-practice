<?php

/*
Constructor Parameters
1.Pass parameters to the constructor just like you would with any other function or method.
2.Constructor can assign value to class properties 
*/

//========================================================================


//code1:

/*

class OSTAD {
    public function __construct($num1,$num2) {
        echo $num1+$num2;
    }
}

new OSTAD(3,4);

// $obj = new OSTAD(3,4);


*/


//========================================================================

//code2:

/*

class Car{

    public $name;
    public $model;
    public $year;


    public function __construct($nameValue,$modelValue,$yearValue)
    {
        $this->name=$nameValue;
        $this->model=$modelValue;
        $this->year=$yearValue;
    }


    public function MyCar(){
        echo "My Car Name is $this->name, model is $this->model & the year is $this->year";
    }
}


$CarObj=new Car("Toyota","Prius","2018");

$CarObj->MyCar();

*/



//code3:

/*


class Car{

    public $name;
    public $model;
    public $year;


    public function __construct($nameValue,$modelValue,$yearValue)
    {
        $this->name=$nameValue;
        $this->model=$modelValue;
        $this->year=$yearValue;
    }


    public function MyCar(){
        echo "My Car Name is $this->name, model is $this->model & the year is $this->year";
    }

    public function MyCar1(){
        echo "My Car Name is $this->name, model is $this->model & the year is $this->year";
    }


    public function MyCar2(){
        echo "My Car Name is $this->name, model is $this->model & the year is $this->year";
    }
}


$CarObj=new Car("Toyota","Prius","2018");

$CarObj->MyCar();


*/


//========================================================================

//code4:

/*

class Car{


    public function MyCar($name,$model,$year){
        echo "My Car Name is $name, model is $model & the year is $year";
    }
}


$CarObj=new Car();

$CarObj->MyCar("Toyota","Axio","2007");

*/