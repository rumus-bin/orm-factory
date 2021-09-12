<?php

namespace App\ORM;

interface DBRecord
{
    public function insert(string $columnName);
}