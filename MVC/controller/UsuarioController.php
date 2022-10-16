<?php
class UsuarioController
{
    public function list()
    {
        //CARGAR EL MODELO
        require_once 'model/Usuario.php';
        //CREAMOS EL OBJECTO 
        $usuario = new Usuario();
        $usuarios = $usuario->list('usuarios');
        require_once 'view/usuario/view-usuario.php';
    }

    public function create()
    {
        //CARGAR EL MODELO
        require_once 'model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setNombre('admin');
        $usuario->setApellido('admin');
        $usuario->setEmail('admin@admin');
        $usuario->setPassword('123123123123');
        $usuario->save();
        
        header("Location: index.php?controller=Usuario&action=list");
        require_once 'view/usuario/create-usuario.php';
    }
}
