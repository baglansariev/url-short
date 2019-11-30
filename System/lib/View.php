<?php
    namespace System\lib;

    class View
    {
        public $layout = 'default';

        public function render($view, $arr = [])
        {
            $file = VIEW_PATH. $view . '.php';

            if(file_exists($file)){
                extract($arr);
                ob_start();
                require_once($file);
                return ob_get_clean();
            }

            return false;
        }

        public function response($view, $arr = [], $errorType = false)
        {
            if($errorType){
                http_response_code($errorType);
            }

            $file = VIEW_PATH. $view . '.php';
            $content = '';

            if(file_exists($file)){
                extract($arr);

                ob_start();
                require_once($file);
                $content = ob_get_clean();

                require_once(LAYOUT_PATH . $this->layout . '.php');
            }

            return false;
        }
    }