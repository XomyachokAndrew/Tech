<?php

use app\core\controller;
use app\models\MessagesModel;

class MainController extends Controller
{
    public function indexaction()
    {
        $messages = new MessagesModel;
        $data = $messages->get_data();
        $this->view->generate('index.php', $data);
    }

    public function maininsertaction()
    {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $array = [
            $full_name,
            $email,
            $message
        ];

        $messages = new MessagesModel;
        $data = $messages->insert_data($array);

        $this->indexaction();
    }
}
