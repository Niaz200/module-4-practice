<?php


/*
Class & Object
1. Class allow developers to encapsulate related data and functions into a single entity.
2. making it easier to manage and extend code
3. An object is an instance of a class. You create an object of a class using the new keyword.
*/


// //code1:

// class OSTAD{
//     public $name="PHP Batch";

//     public function AddTwo($num1,$num2){
//         echo $num1+$num2;
//     }
// }

// $obj=new OSTAD();

// $obj->AddTwo(2,3);



// //code2:

// class OSTAD{
//     public $name="PHP Batch";

//     public function AddTwo($num1,$num2){
//         echo $num1+$num2;
//     }
// }

// $obj=new OSTAD();

// echo $obj->name;


// //code3:

// class OSTAD{
//     public $name="PHP Batch";

   
// }

// $obj=new OSTAD();

// echo $obj->name;



//code4:

class OSTAD{

    public $name="PHP Batch";

    public function demo(){
        echo $this->name;
    }
}

$obj=new OSTAD();

echo $obj->demo();




