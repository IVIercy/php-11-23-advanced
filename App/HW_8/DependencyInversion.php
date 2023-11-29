<?php

interface DatabaseAdapter
{
    public function getData();
}

class Mysql implements DatabaseAdapter
{
    public function getData(): string
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(DatabaseAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    function getData(): void
    {
        $this->adapter->getData();
    }
}