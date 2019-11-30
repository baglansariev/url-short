<?php
    namespace App\controllers;
    use System\lib\View;

    abstract class Controller
    {
        public $view;

        public function __construct()
        {
            $this->view = new View;
        }

        public function getController($controller)
        {
            $parts = explode('/', $controller);

            if(is_array($parts)){
                ucfirst($parts[count($parts)-1]);
                $parts = implode('\\', $parts);
            }

            $path = 'App\controllers\\'. $parts;

            if(class_exists($path)){
                $controller =  new $path;
            }
            else{
                return 'Class (' . $path . ') does not exist';
            }

            $method = 'index';

            if(method_exists($controller, $method)){
                return $controller->$method();
            }

            return $controller;
        }
    }