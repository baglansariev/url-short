<?php
    namespace App\models\client;
    use System\lib\Model;

    class UrlShortener extends Model
    {
        public function setUrl($client_url, $shorten_url)
        {
            $shorten_url = $this->db->escapeString($shorten_url);
            $client_url = $this->db->escapeString($client_url);

            $sql = "INSERT INTO " . DB_PREFIX . "urls SET client_url =  '$client_url', shorten_url = '$shorten_url'";
            if($this->db->changeData($sql))
                return true;
            return false;
        }

        public function hasUrl($shorten_url)
        {
            $shorten_url = $this->db->escapeString($shorten_url);
            $sql = "SELECT COUNT(*) AS count FROM " . DB_PREFIX . "urls WHERE shorten_url = '$shorten_url'";
            return $this->db->getRow($sql)['count'];
        }

        public function getUrl($shorten_url)
        {
            $shorten_url = $this->db->escapeString($shorten_url);
            $sql = "SELECT * FROM " . DB_PREFIX . "urls WHERE shorten_url = '$shorten_url'";
            return $this->db->getRow($sql);
        }
    }