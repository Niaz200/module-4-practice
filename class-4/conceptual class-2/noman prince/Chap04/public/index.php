<?php

use App\Connection\MysqlConnection;

// require '../App/Connection/MysqlConnection.php';

include 'autoloader.php';




// $mysqlConnection = new App\Connection\MysqlConnection();
$mysqlConnection = new MysqlConnection();

echo $mysqlConnection->databaseUrl . "\n";