<?php


/*
Inheritance
1.Inheritance sets up a "like parent, like child" relationship between classes.
2.Instead of rewriting code, the child class can reuse or change what it gets from the parent.
3.One class (the child) can use everything from another class (the parent).
*/


// //code1:


// class Father{

//     public function Print100(){
//         for($i=0;$i<=100;$i++){
//             echo "$i <br/>";
//         }
//     }

   
// }



// class Son extends Father{
        
// }

// $objSon=new Son();
// $objSon->Print100();




//code2:

/*

class Father{

    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

   
}



class Son extends Father{
        
}

$objFather=new Father();
$objFather->Print100();


*/


//========================================================================



/* Overriding Methods
1. Subclasses can override inherited methods from the superclass.
*/



//code3:

/*

class Father{

    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

   
}



class Son extends Father{

    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i <br/>";
        }
    }
        
}

$objSon=new Son();
$objSon->Print100();


*/

//========================================================================



/* Final Keyword:
1. If you declare a class as final, it means it cannot be extended (inherited).
2. If you declare a method as final, it means it cannot be overridden by a subclass.
*/




//code4:

/*

class Father{

    final public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

   
}



class Son extends Father{

    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i <br/>";
        }
    }
        
}

$objSon=new Son();
$objSon->Print100();

*/



//code5:

/*

final class Father{

    final public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

   
}



class Son extends Father{

    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i <br/>";
        }
    }
        
}

$objSon=new Son();
$objSon->Print100();


*/


//========================================================================





/* Abstract Classes:
1. Abstract classes cannot be instantiated on their own but can be subclassed
*/





//code6:

/*

abstract class Father{

     public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }

   
}



class Son extends Father{

    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i <br/>";
        }
    }
        
}

$objSon=new Son();
$objSon->Print100();



*/



//========================================================================



/* Constructors and Inheritance: 
1. If a child class has its own constructor, the parent class's constructor will not be automatically called. 
2. Use parent::__construct() if you want to explicitly call the base class's constructor.
*/


//code7:

/*

 class Father{

    public function __construct(){
        echo "Father Constructor";
       
   }

  
}



class Son extends Father{

    public function __construct(){
        echo "Son Constructor";
       
   }
  
       
}

new Son();

*/


//code8:

/*


class Father{

    public function __construct(){
        echo "Father Constructor";
       
   }

  
}



class Son extends Father{

  
       
}

new Son();


*/


//code9:

/*

 class Father{

    public function __construct(){

        
        echo "Father Constructor";
       
   }

  
}



class Son extends Father{

    public function __construct(){

        parent::__construct();
        echo "Son Constructor";
       
   }
  
       
}

new Son();

*/



//========================================================================

/* parent Keyword:
1. You can call the parent class's method using the parent keyword.
*/


//code10:

class Father{
    public function Abba(){
        echo "Hello from father";
    }
}


class Son extends Father{

    public function Demo(){
        parent::Abba();
    }
}


$obj=new Son();

$obj->demo();