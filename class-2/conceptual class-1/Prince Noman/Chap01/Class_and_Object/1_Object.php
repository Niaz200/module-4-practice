<?php

//code1:

//Twitter User Account Class
class User
{
    // Create Properties
    public $name;
    public $username;
    public $followerCount;
}

//Creating an object or Instantiating an object
$princeObject = new User();

//Assigning values to properties
$princeObject->name          = "Prince";
$princeObject->username      = '@prince';
$princeObject->followerCount = 1000;

//Printing the object
print_r( $princeObject );

?>



//Task
/*
1. Instantiate another object
2. Assign values to properties(name, username, followerCount)
3. Print the object
 */