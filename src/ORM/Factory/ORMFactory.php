<?php

namespace App\ORM\Factory;

use App\ORM\DBConnection;
use App\ORM\DBQueryBuilder;
use App\ORM\DBRecord;

interface ORMFactory
{
    public function getConnection(): DBConnection;

    public function getRecord(): DBRecord;

    public function getBuilder(): DBQueryBuilder;
}