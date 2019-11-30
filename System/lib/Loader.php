<?php
    namespace System\lib;

    class Loader
    {
        public static function view($view, $arr = [])
        {

            $file = VIEW_PATH . $view . '.php';

            if(file_exists($file)){
                extract($arr);

                ob_start();
                require_once($file);
                $output = ob_get_clean();
                return $output;
            }
            return false;
        }

        public static function controller($controller)
        {
            $path = 'App\controllers\\'. self::getParts($controller);

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

        public static function model($model)
        {
            $path = 'App\models\\'. self::getParts($model);

            if(class_exists($path)){
                return  new $path;
            }

            return false;
        }

        private static function getParts($class)
        {
            $parts = explode('/', $class);

            if(is_array($parts)){
                ucfirst($parts[count($parts)-1]);
                return implode('\\', $parts);
            }
            return false;
        }
    }