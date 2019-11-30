<?php
    namespace App\controllers\admin;
    use App\controllers\Controller;
    use App\controllers\admin\LoginController;
    use App\controllers\admin\UrlShortenerController;

    class AccountController extends Controller
    {
        public $url_shortener;
        private $login;

        public function __construct()
        {
            parent::__construct();
            $this->login = new LoginController;
            $this->view->layout = 'admin';
            $this->url_shortener = new UrlShortenerController;
        }

        public function index()
        {
            if(!$this->login->isLogged()){ header('Location: /login'); }

            $data = array();
            $data['title'] = 'Панель управления';
            $data['url_list'] = $this->url_shortener->getUrlList();


            $data['header'] = $this->getController('admin/common/HeaderController');
            $data['footer'] = $this->getController('admin/common/FooterController');

            return $this->view->response('admin/admin', $data);
        }
    }