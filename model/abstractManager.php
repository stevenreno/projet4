<?php

class AbstractManager
{
    protected static $db = null;
    public function __construct()
    {
        if (self::$db == null){
            self::$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_TABLE.';charset=utf8', DB_USER, DB_PASSWORD);
        }
    }
    protected function dbConnect()
    {
        return self::$db;
    }
}