<?php

namespace app\lib;

use PDO;

class DataBase
{
    private $host = 'localhost';
    private $username = 'tech';
    private $password = 'qwerty123';
    private $database = 'tech';
    public $connection;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
