<?php
    require_once 'config/database.php';
    class Model{
        public $db;
        
        public function __construct() {
            $this->db = database::connect();
        }

        public function list($table)
        {
           $query = $this->db->query("SELECT * FROM $table  ");
           return $query;
        }
    }

?>