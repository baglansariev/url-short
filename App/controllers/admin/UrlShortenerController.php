<?php
    namespace App\controllers\admin;
    use App\controllers\Controller;
    use App\models\admin\UrlShortener;

    class UrlShortenerController extends Controller
    {
        public $url_model;

        public function __construct()
        {
            parent::__construct();
            $this->url_model = new UrlShortener;
        }

        public function getUrlList()
        {
            if(isset($_GET['del'])){
                $this->url_model->deleteUrl($_GET['del']);
            }

            $data = array();
            $i = 0;

            $urls = $this->url_model->getList();
            if($urls){
                $data['urls'] = array();
                foreach ($urls as $key => $url) {
                    $i++;
                    $data['urls'][$key]['id'] = $url['id'];
                    $data['urls'][$key]['num'] = $i;
                    $data['urls'][$key]['client_url'] = $url['client_url'];
                    $data['urls'][$key]['shorten_url'] = $url['shorten_url'];
                    $data['urls'][$key]['date_insert'] = $url['date_insert'];
                    $data['urls'][$key]['class'] = '';
                    if($key%2==0){
                        $data['urls'][$key]['class'] = 'tr-grey';
                    }
                }
            }

            return $this->view->render('admin/urls-list', $data);
        }
    }