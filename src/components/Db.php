<?php

namespace TaskNumber1\components;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv->load();


class Db
{

    public static function getConnection() {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        
        $dsn = "mysql:host=$host;dbname=$dbname";
        $db = new \PDO ($dsn,$user,$password);
        return $db;
        
    }
    
    public static function getConnectionDB() {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        
        
        $dsn = "mysql:host=$host";
        $db = new \PDO ($dsn,$user,$password);
        return $db;
    }
}
