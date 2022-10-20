<?php

class Utils{
    public static function delete_session($name)
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
        }
       return $name;
    }

    public static function isAdmin()
    {
        if (!isset($_SESSION['admin'])) {
            header("Location:".base_url);
        }else{
            return true;
        }
    }

    public static function showCategoria()
    {
        require_once 'models/Categoria.php';
        $result = new Categoria();
        $categorias = $result->listAll('categorias');
        return $categorias;
    }
}