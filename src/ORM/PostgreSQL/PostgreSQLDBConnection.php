<?php

namespace App\ORM\Oracle;

use App\ORM\DBConnection;

class PostgreSQLDBConnection implements DBConnection
{

    public function connect(): void
    {
       var_dump("Connect to PostgreSQL DB");
    }
}