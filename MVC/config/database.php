<?php

class database{
    public function connect()
    {
        $connection = new mysqli('localhost','root','','curso');
        $connection->query("SET NAME 'utf8'");

        return $connection;
    }
}