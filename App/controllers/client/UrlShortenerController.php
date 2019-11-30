<?php
    namespace App\controllers\client;
    use App\controllers\Controller;
    use App\models\client\UrlShortener;

    class UrlShortenerController extends Controller
    {
        public $length = 4;
        private $hash;
        private $url_model;
        private $domain;

        public function __construct($length = 4)
        {
            parent::__construct();
            $this->url_model = new UrlShortener;
            $this->hash = 'abUcdeTVfghi45jklmoFGHpqrstu789vwxzABCyDEIJKLMNOPQRSWXnYZ1236';
            $this->length = $length;
            $this->domain = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
        }

        public function index()
        {
            if(isset($_POST['client_url'])){
                $json = array();

                $client_url = $_POST['client_url'];
                $shorten_url = $this->domain . '/' . substr(str_shuffle($this->hash), 0, $this->length);
                $json['url'] = 'Это уже сокращенная ссылка';

                if(!$this->url_model->hasUrl($client_url)){
                    $json['url'] = 'Произошла ошибка попробуйте позднее';
                    if($this->url_model->setUrl($client_url, $shorten_url)){
                        $json['url'] = $shorten_url;
                    }
                }

                $this->responseJSON($json);
            }
        }

        public function redirect()
        {
            $url = $this->url_model->getUrl($this->domain . $_SERVER['REQUEST_URI']);
            if($url){
                header('Location: ' . $url['client_url']);
            }
            else{
                header('Location: /');
            }
        }

        public function responseJSON($json)
        {
            header('application/json');
            echo json_encode($json);
            exit;
        }
    }