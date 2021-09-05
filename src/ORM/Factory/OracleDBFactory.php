<?php

namespace App\ORM\Factory;

use App\ORM\DBConnection;
use App\ORM\DBQueryBuilder;
use App\ORM\DBRecord;
use App\ORM\Oracle\OracleDBConnection;
use App\ORM\Oracle\OracleDBQueryBuilder;
use App\ORM\Oracle\OracleDBRecord;

class OracleDBFactory implements ORMFactory
{

    public function getConnection(): DBConnection
    {
        return new OracleDBConnection();
    }

    public function getRecord(): DBRecord
    {
        return new OracleDBRecord();
    }

    public function getBuilder(): DBQueryBuilder
    {
        return new OracleDBQueryBuilder();
    }
}