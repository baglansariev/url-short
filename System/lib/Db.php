<?php
    namespace System\lib;

    class Db
    {
        public $link;

        public function __construct()
        {
            $this->setLink();
        }

        public function getAllRows($query)
        {
            $result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
            for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
            return $data;
        }

        public function getRow($query)
        {
            $result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
            $row = mysqli_fetch_assoc($result);
            return $row;
        }

        public function changeData($query)
        {
            mysqli_query($this->link, $query) or die(mysqli_error($this->link));
            return true;
        }

        public function escapeString($str)
        {
            return mysqli_real_escape_string($this->link, $str);
        }


        private function setLink()
        {
            $this->link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB);
            mysqli_query($this->link, "SET NAMES 'utf8'");
        }
    }