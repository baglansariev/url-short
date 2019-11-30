<?php
    namespace System\lib;
    use System\lib\Db;

    abstract class Model
    {
        public $db;

        public function __construct()
        {
            $this->db = new Db;
        }
    }