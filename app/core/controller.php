<?php

namespace app\core;

use app\core\view;

class Controller
{
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function indexAction()
    {

    }
}
