<?php 

//code1:

/*

$string = "Hidden Important Text";
$key = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ";
// $newKey = str_shuffle($key);
$newKey = "hZWELpFjSUJXdG04BsutbiQ2NweVn6TrkyRPD5KMfxCY7IO9m3aqgHvo8cz1Al ";
// $newKey = "uXD7P5OtLAK4VIrB 1hS6TCMxcReGsjd8mJqgoWnwlzfFkb3HZ2yYpQ9E0UNvia";
// echo $newKey;
// echo str_shuffle($key);


*/


//code2:

/*

$string = "Hidden Important Text";
$key = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ";
// $newKey = str_shuffle($key);
$newKey = "hZWELpFjSUJXdG04BsutbiQ2NweVn6TrkyRPD5KMfxCY7IO9m3aqgHvo8cz1Al ";

$encryptedText = "";
for($i=0; $i<strlen($string); $i++){
    $currentLetter =$string[$i];
    // echo $currentLetter;
    $currentPosition = strpos($key, $currentLetter);
    // echo $currentPosition ."\n";
    $replacement = $newKey[$currentPosition];
    // echo $replacement ."\n";
    $encryptedText .= $replacement;
}

echo $encryptedText;

*/

//code3:



// $string = "Hidden Important Text";
$key = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ";
// $newKey = str_shuffle($key);
$newKey = "hZWELpFjSUJXdG04BsutbiQ2NweVn6TrkyRPD5KMfxCY7IO9m3aqgHvo8cz1Al ";

$text = "ySEELG Rd40sthGt IL2t";
$decryptedText = "";
for($i=0; $i<strlen($text); $i++){
    $currentLetter = $text[$i];
    // echo $currentLetter;
    $currentPosition = strpos($newKey, $currentLetter);
    // echo $currentPosition ."\n";
    $replacement = $key[$currentPosition];
    // echo $replacement ."\n";
    $decryptedText .= $replacement;
}

echo $decryptedText;