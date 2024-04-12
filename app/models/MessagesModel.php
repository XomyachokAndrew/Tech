<?php

namespace app\models;

use app\lib\database;
use app\core\model;
use PDO;

class MessagesModel extends Model
{
    public $table = 'messages';

    public function get_data()
    {
        $database = new DataBase;
        $pdo = $database->connection;
        $stmt = $pdo->prepare('SELECT * FROM '. $this->table);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
