<?php

use Database\MySQL\Connection as MySQL;
use Database\PostgreSQL\Connection as PostgreSQL;

// Allow for better organization by grouping classes that work together to perform a task.
// Allow the same name to be used for more than one class

// These are the included files of the classes. Here we are including/requring files. If we have multiple classes in the same file then we have to add these require statement multiple times, which is solved by autoloading.
require 'Database/MySQL/Connection.php';
require 'Database/PostgreSQL/Connection.php';


$mySqlConnection = new MySQL();
echo $mySqlConnection->getDatabaseUrl();



$postgresqlConnection = new PostgreSQL();
echo $postgresqlConnection->getDatabaseUrl();
