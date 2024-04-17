<?php

namespace App\Core;

class Route
{
    public static function start()
    {
        $standart_controller_name = 'Main';
        $standart_action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        $model_name = $standart_controller_name . 'Model';
        $controller_name = $standart_controller_name . 'Controller';
        $action_name = $standart_action_name . 'Action';

        $model_file = strtolower($model_name) . '.php';
        $model_path = 'app/models/' . $model_file;

        if (file_exists($model_path)) {
            include $model_path;
        }

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = 'app/controllers/' . $controller_file;

        if (!file_exists($controller_path)) {
            echo "контроллера нет";
            return;
        }
        include $controller_path;

        $controller = new $controller_name();
        $action = $action_name;

        if (!method_exists($controller, $action)) {
            echo "нет действия";
            return;
        }
        $controller->$action();
    }
}
