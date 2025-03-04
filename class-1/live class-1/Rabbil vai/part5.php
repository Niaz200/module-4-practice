<?php

/*
Static Properties
1. Static properties are tied to the class, not an instance of the class. 
2. They can be accessed without creating an instance of the class.
*/

/*
class MyClass {
    public static $staticProperty = "Static Property";
}
echo MyClass::$staticProperty;  // Outputs: Static Property
*/


/*
Static Methods
1.Just like static properties, static methods are accessed without creating an instance of the class
2.They are often used as utility functions that do not rely on any instance-specific data
*/


//code1:

/*

class MyClass{

    public function Sakibkhan(){
        echo "My Name is khan";
    }
}


$obj=new MyClass();
$obj->Sakibkhan();


*/



//code2:

/*

class MyClass{

    public static function Sakibkhan(){
        echo "My Name is khan";
    }
}



MyClass::Sakibkhan();


*/


//code3:

/*

class MyClass{

    public static function Sakibkhan(){
        echo "My Name is khan";
    }
}



//baro bou
$obj=new MyClass();
$obj->Sakibkhan();



//choto bou
MyClass::Sakibkhan();


*/



//========================================================================


/*
Accessing Static Properties Inside Class Methods
1.Within class methods, static properties and methods are accessed using the self keyword followed by the scope resolution operator
*/


//code4:

/*

class MyClass{
    public $Hero="Sakib Khan";

    public function Cinema(){
        echo $this->Hero;
    }
}


$obj=new MyClass();
$obj->Cinema();


*/


//code4:

class MyClass{
    public static $Hero="Sakib Khan";

    public static function Cinema(){
        echo self::$Hero;
    }
}


$obj=new MyClass();
$obj->Cinema();
