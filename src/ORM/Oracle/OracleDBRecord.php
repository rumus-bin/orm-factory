<?php

namespace App\ORM\Oracle;

use App\ORM\DBRecord;

class OracleDBRecord implements DBRecord
{

    public function insert(string $columnName): void
    {
        var_dump("Insert to oracle DB!");
    }
}