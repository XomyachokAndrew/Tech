<?php

use app\core\controller;
use app\models\MessagesModel;

class TestController extends Controller
{
    public function testAction()
    {
        $messages = new MessagesModel;
        $data = $messages->get();
        $this->view->generate('main.php', $data, 'template.php');
    }
}
