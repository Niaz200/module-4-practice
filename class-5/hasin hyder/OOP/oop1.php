<?php

//code1:



class Painter{
     public $color = "red";

     public function paint(){
        echo "I paint ". $this->color;
     }
}

$painter = new Painter();
$painter->paint();


