<?php
    namespace App\models\admin;
    use System\lib\Model;

    class UrlShortener extends Model
    {
        public function getList()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "urls";
            return $this->db->getAllRows($sql);
        }

        public function deleteUrl($url_id)
        {
            $sql = "DELETE FROM " . DB_PREFIX . "urls WHERE id = " . (int)$url_id;
            if($this->db->changeData($sql)) return true;
            return false;
        }
    }