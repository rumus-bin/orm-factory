<?php

namespace App\ORM\MYSQL;

use App\ORM\DBRecord;

class MysqlDBRecord implements DBRecord
{

    public function insert(string $columnName): void
    {
        var_dump("Insert $columnName to MYSQL DB!");
    }
}