<?php
class DataBase{
    public static function connection()
    {
        $localhost = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'db_tienda_master';
        
        $connect = new mysqli($localhost,$username,$password,$db);
        $connect->query("SET NAME 'UTF8'");

        return $connect;
    }
}