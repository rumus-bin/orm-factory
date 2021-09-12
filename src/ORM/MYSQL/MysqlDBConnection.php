<?php

namespace App\ORM\MYSQL;

use App\ORM\DBConnection;

class MysqlDBConnection implements DBConnection
{

    public function connect()
    {
        var_dump('Connected to MYSQL DB driver!!!!');
    }
}