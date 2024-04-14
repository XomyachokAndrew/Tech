<?php

namespace app\models;

use app\lib\database;
use app\core\model;
use PDO;

class MessagesModel extends Model
{
    public $table = 'messages';

    public function get()
    {
        $database = new DataBase;
        $pdo = $database->connection;
        $stmt = $pdo->prepare('SELECT * FROM messages ORDER BY id DESC');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($array = [])
    {
        $database = new DataBase;
        $pdo = $database->connection;
        $stmt = $pdo->prepare("INSERT INTO `messages`(`full_name`, `email`, `message`) VALUES(:full_name, :email, :message)");
        $stmt->execute(array('full_name' => $array['full_name'], 'email' => $array['email'], 'message' => $array['message']));
    }
}


