<?php
    namespace App\controllers\client\common;
    use App\controllers\Controller;

    class FooterController extends Controller
    {
        public function index()
        {
            return $this->view->render('client/common/footer');
        }
    }