<?php
    namespace system\lib;
    use system\lib\View;

    class Router
    {
        public $routes;
        public $view;
        protected $params = [];

        public function __construct()
        {
            session_start();
            $this->routes = require_once(ROUTES_PATH . 'web.php');
            $this->view = new View;
        }

        public function run()
        {
            if($this->match()){
                $path = 'App\controllers\\' . $this->params['controller'];
                $action = $this->params['action'];
                $controller = new $path();
                $controller->$action();
            }
            else{
                $this->view->response('/client/common/404', [], 404);
            }
        }

        private function match()
        {
            foreach ($this->routes as $key => $val) {
                if(preg_match("#^$key$#", trim($_SERVER['REQUEST_URI'], '/'))){
                    $this->params = $val;
                    return true;
                }
            }
            return false;
        }
    }