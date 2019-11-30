<?php
    namespace App\models\admin;
    use System\lib\Model;

    class Login extends Model
    {
        public function getUser($login)
        {
            $login = $this->db->escapeString($login);
            $sql = "SELECT * FROM " . DB_PREFIX . "users WHERE login = '$login'";
            return $this->db->getRow($sql);
        }
    }