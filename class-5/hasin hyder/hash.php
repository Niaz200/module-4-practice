<?php 

//code1:
/*

$text = "Hello World";
$md5Hash = md5($text);
$sha1Hash = sha1($text);
echo $md5Hash;
echo "\n";
echo $sha1Hash;

*/


//code2:

$text = "Hello World";
$md5Hash = md5($text);
$sha1Hash = sha1($text);
echo $md5Hash;
echo "\n";
echo $sha1Hash;
echo "\n";


if(md5($text)=='b10a8db164e0754105b7a99be72e3fe5'){
    echo "Matched";
}
