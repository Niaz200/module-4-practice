<?php

//what is ascii
//ascii is character encoding standard for electronic communication
//ascii codes represent text in computers, telecommunications equipment, and other devices

//code1:
/*

echo ord('a'); //97

*/

//code2:
/*

echo chr(97); //a

*/

//code3:
/*

echo ord('A'); //a

*/

//code4:
/*

$string = "Hello World";

//find ascii code of each letter

for($i=0; $i<strlen($string); $i++){
    echo ord($string[$i])." "; 
}

*/


//code5:
/*

$string = "Hello dosto, I really love you";


//find ascii code of each letter

for($i=0; $i<strlen($string); $i++){
    echo ord($string[$i])." "; 
}

*/

//code6:

$numbers = array(72, 101, 108, 108, 111, 32, 100, 111, 115, 116, 111, 44, 32, 73, 32, 114, 101, 97, 108, 108, 121, 32, 108, 111, 118, 101, 32, 121, 111, 117);

foreach($numbers as $number){
    echo chr($number);
}






