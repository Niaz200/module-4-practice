<?php


/*
Constructor
1.Method that gets executed whenever an object is instantiated from a class
2.The constructor method has a magic name: __construct.
*/


//code1:

class OSTAD{
    
   
    public function __construct(){
        echo "Hello, I am Constructor";
    }
}

new OSTAD();

// $obj=new OSTAD();