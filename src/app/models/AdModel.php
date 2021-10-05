<?php
namespace app\models;
use app\DB;

class AdModel 
{
    public $db;

    public $table = "ads";
    // public $contacts;
    // public $content;
    // public $uploaded;

    public function __construct()
    {
        $this->db = new DB;
    }
    public function getAll()
    {
        return $this->db->getAll($this->table);
    }
    public function create($contacts, $content)
    {
        return $this->db->create($this->table, $contacts, $content);
    }
}