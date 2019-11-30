<?php
    namespace App\controllers\admin\common;
    use App\controllers\Controller;

    class FooterController extends Controller
    {
        public function index()
        {
            return $this->view->render('admin/common/footer');
        }
    }