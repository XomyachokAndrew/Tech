<?php

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function indexaction()
    {
        $this->view->generate('index.php');
    }
}