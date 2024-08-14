<?php

namespace App\Connection;


// use Database\MySQL\Connection;

class MysqlConnection
{
    // public string $databaseUrl;
    


    public function __construct( public string $databaseUrl = 'mysql:host=127.0.0.1;dbname=php' )

    {}

    
}