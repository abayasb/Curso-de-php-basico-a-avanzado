<?php

require_once 'config/database.php';

class Model
{
    public $databese;

    public function __construct()
    {
        $this->databese = DataBase::connection();
    }

    public function listAll($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->databese->query($sql);
        return $result;
    }

    
}
