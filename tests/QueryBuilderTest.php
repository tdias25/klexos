<?php

class QueryBuilderTest
{
    public function index()
    {
        $query = new MySQLBuilder;
        $query->select('name')
        ->from('users')
        ->where('name', 'LIKE', '%jose%')
        ->limit(2);
    }
}

interface SQLBuilder
{
    public function select();
    public function insert();
    public function delete();
    public function update();
}

class MySQLBuilder implements SQLBuilder
{
    private $statments = [];

    public function appendStatment(string $statment): self
    {
        $this->statments[] = $statment;
        return $this;
    }

    public function select($parameter): self
    {
        $select = sprintf('SELECT %', $parameter);
        $this->appendStatment($select);

        return $this;
    }

    public function from($parameter): self
    {
        $from = sprintf('FROM %', $parameter);
        $this->appendStatment($from);

        return $this;
    }

    public function toSql(): string
    {
        return implode(' ', $this->statments);
    }
}

class Select implements MySQLStatment
{
    public function statment($param)
    {   //do some logic
        return "SELECT $param";
    }
}

class From implements MySQLStatment
{
    public function statment($param)
    {   //do some logic
        return "FROM $param";
    }
}
