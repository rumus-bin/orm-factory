<?php

namespace App\ORM\Oracle;

use App\ORM\DBConnection;

class OracleDBConnection implements DBConnection
{

    public function connect(): void
    {
       var_dump("Connect to Oracle DB");
    }
}