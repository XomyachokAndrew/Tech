<?php

use app\core\controller;
use app\models\MessagesModel;

class MainController extends Controller
{
    public function indexAction()
    {
        $messages = new MessagesModel;
        $data = $messages->get();
        $this->view->generate('index.php', $data);
    }

    public function indexInsertAction()
    {
        if (!isset($_POST['full_name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
            return;
        }  

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $pattern_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

        if (!preg_match($pattern_email, $email) || $full_name == null || $message == null) {
            return;
        }
        $array = [
            'full_name' => $full_name,
            'email' => $email,
            'message' => $message
        ];

        $messages = new MessagesModel;
        $data = $messages->insert($array);

        echo json_encode($array);
    }
}
