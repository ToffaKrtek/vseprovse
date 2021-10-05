<?php

    namespace App;
    use PDO;

    class DB
    {
        protected $db;
        protected $dsn = 'mysql:host=dbdb; port=3306; dbname=vseprovsedb; charset=utf8';
        protected $user = '';
        protected $password = '';

        protected function __construct()
        {
            $this->db = new PDO($this->dsn, $this->user, $this->password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }


    }