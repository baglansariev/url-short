<?php
    namespace App\controllers\admin;
    use App\controllers\Controller;
    use App\models\admin\Login;

    class LoginController extends Controller
    {
        public $login_module;

        public function __construct()
        {
            parent::__construct();
            $this->login_module = new Login;
        }

        public function index()
        {
            if($this->isLogged()){ header('Location: /admin'); }

            $data = array();
            $data['title'] = 'Вход';

            if(isset($_POST['login']) && isset($_POST['password'])){
                $user = $this->login_module->getUser($_POST['login']);
                $data['error_msg'] = $this->validate($_POST['password'], $user);

                if(!$data['error_msg']){
                    $this->login($user['login'], $user['password']);
                }
            }

            $data['header'] = $this->getController('client/common/HeaderController');
            $data['footer'] = $this->getController('client/common/FooterController');

            return $this->view->response('admin/login', $data);
        }

        public function login($login, $status)
        {
            $_SESSION['auth'] = true;
            $_SESSION['login'] = $login;
            $_SESSION['status'] = $status;
            header('Location: /admin');
        }

        public function logout()
        {
            if(!$this->isLogged()){ header('Location: /'); }

            $_SESSION['auth'] = null;
            $_SESSION['login'] = null;
            $_SESSION['status'] = null;
            header('Location: /login');
        }

        public function isLogged()
        {
            if(isset($_SESSION['auth']) && isset($_SESSION['login']))
                return true;
            return false;
        }

        public function isAdmin()
        {
            if($this->isLogged() && $_SESSION['status'] == 'admin')
                return true;
            return false;
        }

        private function validate($password, $user = array())
        {
            if(!$user['login'] || !password_verify($password, $user['password']))
                return 'Неправильный логин или пароль!';
            return null;
        }
    }