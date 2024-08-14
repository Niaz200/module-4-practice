<?php

//code1:
/*

class ZoomConnection

{
    private static int $count = 0;


    public function getCount()
    {
        return self::$count;
    }


}


$connection1 = new ZoomConnection();

print $connection1->getCount();

*/


//code2:

/*

class ZoomConnection

{
    private static int $count = 0;

    public function __construct(){
        self::$count++;
    }


    public function getCount()
    {
        return self::$count;
    }


}


$connection1 = new ZoomConnection();

print $connection1->getCount();

*/


//code3:

/*

class ZoomConnection

{
    private static int $count = 0;

    public function __construct(){
        self::$count++;
    }


    public function __destruct()
    {
        self::$count--;
    }


    public function getCount()
    {
        return self::$count;
    }


}


$connection1 = new ZoomConnection();
$connection2 = new ZoomConnection();

unset($connection2);

print $connection1->getCount();


*/


//code4:

/*

class ZoomConnection

{
    private static int $count = 0;

    private string $connectionID;

    public function __set($name, $value){
        $this->$name = $value;
    }


    public function __get($name){
        return $this->$name;
    }

    public function __construct(){
        self::$count++;
    }


    public function __destruct()
    {
        self::$count--;
    }


    public function getCount()
    {
        return self::$count;
    }


}


$connection1 = new ZoomConnection();

$connection1->connectionID = '123';
print $connection1->connectionID;

*/


//code5:

class ZoomConnection

{
    private static int $count = 0;

    private string $connectionID;

    public function __set($name, $value){
        $this->$name = $value;
    }


    public function __get($name){
        return $this->$name;
    }

    public function __construct(){
        self::$count++;
    }


    public function __destruct()
    {
        self::$count--;
    }


    public function getCount()
    {
        return self::$count;
    }

    public function __tostring()
    {
        return "Connection ID: " . $this->connectionID;
    }



}


$connection1 = new ZoomConnection();

$connection1->connectionID = '123';
print $connection1;