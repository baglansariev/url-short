<?php
    namespace App\models\admin;
    use System\lib\Model;

    class Register extends Model
    {
        public function hasUser($user_name)
        {
            $user_name = $this->db->escapeString($user_name);
            $sql = "SELECT COUNT(*) AS count FROM " . DB_PREFIX . "users WHERE login = '$user_name'";
            return $this->db->getRow($sql)['count'];
        }

        public function setNewUser($login, $password)
        {
            $user_name = $this->db->escapeString($login);
            $sql = "INSERT INTO " . DB_PREFIX . "users SET login = '$login', password = '$password'";
            if($this->db->changeData($sql))
                return true;
            return false;
        }
    }