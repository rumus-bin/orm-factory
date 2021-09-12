<?php

namespace App\ORM\MYSQL;

use App\ORM\DBQueryBuilder;

class MysqlDBQueryBuilder implements DBQueryBuilder
{

    public function select(mixed $columns): MysqlDBQueryBuilder
    {
        var_dump("Select $columns");

        return $this;
    }

    public function where(string $columnName, string $operator, mixed $value): MysqlDBQueryBuilder
    {
        var_dump("where $columnName $operator $value");

        return $this;
    }

    public function orWhere(string $columnName, string $operator, mixed $value): MysqlDBQueryBuilder
    {
        var_dump("or where $columnName $operator $value");

        return $this;
    }

    public function count(string $columnName, ?string $alias = null): MysqlDBQueryBuilder
    {
        var_dump("count $columnName $columnName");

        return $this;
    }

    public function limit(int $number): MysqlDBQueryBuilder
    {
        var_dump("limit $number");

        return $this;
    }

    public function orderBy(string $columnName, ?string $direction = DBQueryBuilder::ASC_DIRECTION): MysqlDBQueryBuilder
    {
        var_dump("order by  $columnName $direction");

        return $this;
    }

    public function groupBy(array $columnsNames): MysqlDBQueryBuilder
    {
        var_dump("group by " . implode($columnsNames));

        return $this;
    }

    public function get()
    {

        var_dump("Get result request of Mysql Query Builder!");
    }

    public function save()
    {
        var_dump("Save new model of Mysql!");
    }

    public function delete()
    {
        var_dump("Delete model of Mysql!");
    }
}