<?php

//code1:

/*

class Calender{

    public $name;

}


$calender = new Calender();

$calender->name = 'Year Calender';

print $calender->name;

*/


//code2:

/*

class Calender{

    public $name;

    public ?int $days = null;

}


$calender = new Calender();

var_dump( $calender->days);

*/


//code3:
/*


class Calender{

    public $name;

    public ?int $days = null;

    public static $daysInFebruay = 28;

}


print Calender::$daysInFebruay;

*/

//code4:

/*

class Calender{

    public $name;

    public ?int $days = null;

    public static $daysInFebruay = 28;

}


print Calender::$daysInFebruay ."\n";
Calender::$daysInFebruay++;
print Calender::$daysInFebruay;

*/



//code4:


class Calender{

    // public $name;

    // public ?int $days = null;

    const MONTH_IN_YEAR = 12; 

    public static $daysInFebruay = 28;

}


print Calender::MONTH_IN_YEAR ."\n";

