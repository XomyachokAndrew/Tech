<?php

use App\Core\Controller;
use App\Models\MessagesModel;

class MainController extends Controller
{
    public function indexAction()
    {
        $messages = new MessagesModel;
        $data = $messages->get();
        $this->view->generate('index', $data);
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
        $pattern_full_name = '/^[А-ЯЁ][а-яё]*\s[А-ЯЁ][а-яё]*\s[А-ЯЁ][а-яё]*$/u';

        if (!preg_match($pattern_email, $email) || !preg_match($pattern_full_name, $full_name) || $message == null) {
            return;
        }

        $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

        $data_array = [
            'full_name' => $full_name,
            'email' => $email,
            'message' => $message
        ];

        $messages = new MessagesModel;
        $messages->insert($data_array);

        echo json_encode($data_array);
    }
}
