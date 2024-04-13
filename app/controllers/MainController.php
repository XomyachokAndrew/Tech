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

    public function indexinsertaction()
    {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $array = [
            'full_name' => $full_name,
            'email' => $email,
            'message' => $message
        ];

        $messages = new MessagesModel;
        $data = $messages->insert_data($array);

        echo json_encode($array);
    }
}
