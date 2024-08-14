<?php


//code1:

/*


class Manager{
    public function __construct(public int $id, public string $name){

    }
}


class Department{

    public ?Manager $manager;

    public function  __construct( public string $name){

    }
}

$department1 = new Department('CSE');

$department2 = $department1;

var_dump($department1);
var_dump($department2);

*/

//code2:

/*

class Manager{
    public function __construct(public int $id, public string $name){

    }
}


class Department{

    public ?Manager $manager;

    public function  __construct( public string $name){

    }
}

$department1 = new Department('CSE');

$department2 = $department1;


$department2->name = 'EEE';

var_dump($department1);
var_dump($department2);

*/


//code3:

/*


class Manager{
    public function __construct(public int $id, public string $name){

    }
}


class Department{

    public ?Manager $manager;

    public function  __construct( public string $name){

    }
}

$department1 = new Department('CSE');

$department2 = $department1;


$department2->name = 'EEE';


$department1->manager = new Manager(1, 'John');

var_dump($department1);


*/


//code4:

/*


class Manager{
    public function __construct(public int $id, public string $name){

    }
}


class Department{

    public ?Manager $manager;

    public function  __construct( public string $name){

    }
}

$department1 = new Department('CSE');

$department2 = $department1;




$department1->manager = new Manager(1, 'John');

$department2 = clone $department1;

$department2->name = 'EEE';

var_dump($department1);
var_dump($department2);

*/


//code5:


class Manager{
    public function __construct(public int $id, public string $name){

    }
}


class Department{

    public ?Manager $manager;

    public function  __construct( public string $name){

    }


    //Deep Clone

    public function __clone()
    {
        if(isset($this->manager)){
            $this->manager = clone $this->manager;
        }
    }
}

$department1 = new Department('CSE');

$department2 = $department1;




$department1->manager = new Manager(1, 'John');

$department2 = clone $department1;

$department2->name = 'EEE';
$department2->manager->id = 10;
$department2->manager->name = "Prince";

var_dump($department1);
var_dump($department2);
