<?php

namespace App\ORM\Oracle;

use App\ORM\DBQueryBuilder;

class OracleDBQueryBuilder implements DBQueryBuilder
{

    public function select(mixed $columns): OracleDBQueryBuilder
    {
        var_dump("Select $columns");

        return $this;
    }

    public function where(string $columnName, string $operator, mixed $value): OracleDBQueryBuilder
    {
        var_dump("where $columnName $operator $value");

        return $this;
    }

    public function orWhere(string $columnName, string $operator, mixed $value): OracleDBQueryBuilder
    {
        var_dump("or where $columnName $operator $value");

        return $this;
    }

    public function count(string $columnName, ?string $alias = null): OracleDBQueryBuilder
    {
        var_dump("count $columnName $columnName");

        return $this;
    }

    public function limit(int $number): OracleDBQueryBuilder
    {
        var_dump("limit $number");

        return $this;
    }

    public function orderBy(string $columnName, ?string $direction = DBQueryBuilder::ASC_DIRECTION): OracleDBQueryBuilder
    {
        var_dump("order by  $columnName $direction");

        return $this;
    }

    public function groupBy(array $columnsNames): OracleDBQueryBuilder
    {
        var_dump("group by " . implode($columnsNames));

        return $this;
    }

    public function get(): void
    {

        var_dump("Get result request of Oracle Query Builder!");
    }

    public function save(): void
    {
        var_dump("Save new model of Oracle!");
    }

    public function delete(): void
    {
        var_dump("Delete model of Oracle!");
    }
}