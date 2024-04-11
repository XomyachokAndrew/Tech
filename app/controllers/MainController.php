<?php

class MainController extends Controller
{
    public function mainaction()
    {
        $this->view->generate('main.php', 'template.php');
    }
}