<?php

    namespace app;
    use PDO;

    class DB
    {
        protected $db;
        protected $dsn = 'mysql:host=db; port=3306; dbname=vseprovsedb; charset=utf8';
        protected $user = 'vseprovseuser';
        protected $password = 'userpassword';

        public function __construct()
        {
            $this->db = new PDO($this->dsn, $this->user, $this->password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        public function getAll($table)
        {
            $stm = $this->db->query("SELECT * FROM `$table`");
            return $stm->fetchAll();
        }
        public function create($table, $contacts, $content)
        {
            $stm = $this->db->prepare("INSERT INTO`$table` (contacts, content) VALUES (?, ?)");

            return $stm->execute([$contacts, $content]);
        }
    }