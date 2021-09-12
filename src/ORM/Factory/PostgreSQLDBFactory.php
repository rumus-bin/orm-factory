<?php

namespace App\ORM\Factory;

use App\ORM\Oracle\PostgreSQLDBConnection;
use App\ORM\Oracle\PostgreSQLDBQueryBuilder;
use App\ORM\Oracle\PostgreSQLDBRecord;

class PostgreSQLDBFactory implements ORMFactory
{

    public function getConnection(): PostgreSQLDBConnection
    {
        return new PostgreSQLDBConnection();
    }

    public function getRecord(): PostgreSQLDBRecord
    {
        return new PostgreSQLDBRecord();
    }

    public function getBuilder(): PostgreSQLDBQueryBuilder
    {
        return new PostgreSQLDBQueryBuilder();
    }
}