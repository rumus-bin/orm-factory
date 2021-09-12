<?php

namespace App\ORM;

interface DBQueryBuilder
{
    public const ASC_DIRECTION = 'asc';
    public const DESC_DIRECTION = 'desc';

    public function select(mixed $columns): DBQueryBuilder;

    public function where(string $columnName, string $operator, mixed $value): DBQueryBuilder;

    public function orWhere(string $columnName, string $operator, mixed $value): DBQueryBuilder;

    public function count(string $columnName, ?string $alias = null): DBQueryBuilder;

    public function limit(int $number): DBQueryBuilder;

    public function orderBy(string $columnName, ?string $direction = self::ASC_DIRECTION): DBQueryBuilder;

    public function groupBy(array $columnsNames): DBQueryBuilder;

    public function get();

    public function save();

    public function delete();
}