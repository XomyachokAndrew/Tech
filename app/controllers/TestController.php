<?php

use app\core\controller;
use app\models\MessagesModel;

class TestController extends Controller
{
    public function testaction()
    {
        $messages = new MessagesModel;
        $data = $messages->get_data();
        $this->view->generate('main.php', $data, 'template.php');
    }
}
