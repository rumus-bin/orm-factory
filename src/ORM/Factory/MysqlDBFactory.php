<?php

namespace App\ORM\Factory;

use App\ORM\DBConnection;
use App\ORM\DBQueryBuilder;
use App\ORM\DBRecord;
use App\ORM\MYSQL\MysqlDBConnection;
use App\ORM\MYSQL\MysqlDBQueryBuilder;
use App\ORM\MYSQL\MysqlDBRecord;

class MysqlDBFactory implements ORMFactory
{

    public function getConnection(): DBConnection
    {
        return new MysqlDBConnection();
    }

    public function getRecord(): DBRecord
    {
        return new MysqlDBRecord();
    }

    public function getBuilder(): DBQueryBuilder
    {
        return new MysqlDBQueryBuilder();
    }
}