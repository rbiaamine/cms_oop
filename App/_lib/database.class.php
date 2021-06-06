<?php

class Database
{
    private static $dbh;

    private function __construct()
    {}
    public static function getInstance(){
        if (null === self::$dbh){
            self::$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        }
        return self::$dbh;
    }
}