<?php
    namespace App\controllers\client;
    use App\controllers\Controller;

    class HomeController extends Controller
    {
        public function index()
        {
            $data = array();
            
            $data['title'] = 'LS - Main Page';
            $data['test'] = 'test';
            $data['header'] = $this->getController('client/common/HeaderController');
            $data['footer'] = $this->getController('client/common/FooterController');

            return $this->view->response('client/home', $data);
        }
    }