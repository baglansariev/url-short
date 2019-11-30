<?php
    namespace App\controllers\admin\common;
    use App\controllers\Controller;

    class HeaderController extends Controller
    {
        public function index()
        {
            return $this->view->render('admin/common/header');
        }
    }