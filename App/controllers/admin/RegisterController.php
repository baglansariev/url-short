<?php
    namespace App\controllers\admin;
    use App\controllers\Controller;
    use App\controllers\admin\LoginController;
    use App\models\admin\Register;

    class RegisterController extends Controller
    {
        private $register_model;
        private $login;

        public function __construct()
        {
            parent::__construct();
            $this->register_model = new Register;
            $this->login = new LoginController;
        }

        public function index()
        {
            // Страница регистрации открывается только для пользователя с доступом "Admin"
            if(!$this->login->isAdmin()){ header('Location: /'); }

            $data = array();
            $data['title'] = 'Регистрация';

            if(isset($_POST['reg_login']) && isset($_POST['reg_password']) && isset($_POST['reg_confirm'])){
                $data['error_msg'] = $this->validate($_POST['reg_login'], $_POST['reg_password'], $_POST['reg_confirm']);

                if(!$data['error_msg'] && $this->register($_POST['reg_login'], $_POST['reg_password'])){
                    $data['success_msg'] = 'Вы успешно зарегистрировались!';
                }
            }

            $data['header'] = $this->getController('admin/common/HeaderController');
            $data['footer'] = $this->getController('admin/common/FooterController');

            return $this->view->response('admin/register', $data);
        }

        public function register($login, $password)
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            if($this->register_model->setNewUser($login, $password))
                return true;
            return false;
        }

        private function validate($login, $password, $confirm)
        {
            if($this->register_model->hasUser($login)) return 'Такой логин уже зарегистрирован!';
            if($password !== $confirm) return 'Пароли не совпадают!';
            return null;
        }
    }