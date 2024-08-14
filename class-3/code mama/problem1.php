/* Problem Statement
You are given two strings 
�
A and 
�
B. Your task is check whether the string 
�
B is anagram of string 
�
A or not. An anagram of a string is another string that contains the same characters, only the order of characters can be different. For example, “abcd” and “dabc” are an anagram of each other whereas "abcd" and "aabc" are not.

Input
The input consists of two strings 
�
A and 
�
B in two lines containing only lowercase English letters.

Output
In output print "YES" if string 
�
B is anagram of string 
�
A or "NO" otherwise. Print without quotation mark */


<?php
    # Write your PHP code from here

    $line1 = trim(fgets(STDIN));
    $line2 = trim(fgets(STDIN));




    $split1 = str_split($line1);
    $split2 = str_split($line2);

    sort($split1);
    sort($split2);



    $line1=join($split1);
    $line2=join($split2);
    if($line1==$line2){
        print"YES";

    }else{
        print"NO";
    }
    
?>



/*
Remove Duplicate Characters
বাং

Problem Statement
Write a program that removes duplicate characters from a given string, keeping only the first occurrence of each character.

Input
The input consists of a string.

Output
The output will be a string without any duplicate character.
*/

//code1:

<?php
    # Write your PHP code from here
    

    $line = trim(fgets(STDIN));

    $splitted = str_split($line);

    $unique = array_unique($splitted);

    $jointed = join($unique);

    // $jointed = join("",$unique);

    print $jointed;
?>

//code2:

<?php
    # Write your PHP code from here

    $line = trim(fgets(STDIN));

    $monitor = [];
    $output= "";

    for($i=0; $i<strlen($line); $i++){
        // print $line[$i]."\n";

        if($monitor[$line[$i]] == false){
            $monitor[$line[$i]] = true;

            $output = $output.$line[$i];
        }
    }

    // print_r($monitor);
    print $output;
    
?>