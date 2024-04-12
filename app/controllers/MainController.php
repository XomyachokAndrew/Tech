<?php

use app\core\controller;
use app\models\MessagesModel;

class MainController extends Controller
{
    public function mainaction()
    {
        $messages = new MessagesModel;
        $data = $messages->get_data();
        $this->view->generate('main.php', 'template.php', $data);
    }
}
