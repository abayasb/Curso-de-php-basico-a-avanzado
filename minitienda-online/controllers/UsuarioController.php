<?php
require_once 'models/Usuario.php';

class UsuarioController
{

    function index()
    {
        
    }

    public function create()
    {
        require_once 'views/usuario/register.php';
    }

    public function save()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        if ($nombre && $apellido && $email && $password) {
            if (isset($_POST)) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellido);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                if ($usuario->save()) {
                    $_SESSION['register']="complete";
                    echo '<h1>Usuario registrado correctamente</h1>';
                }else{
                    $_SESSION['register']="failed";
                    echo '<h1> Erro al registrar Usuario</h1>';
                }
            }else{
                $_SESSION['register']="failed";
            }
        }else{
            $_SESSION['register']="failed";
        }

        
        header("Location:".base_url.'Usuario/create');
    }

    public function login()
    {
        $email = isset($_POST['email']) ? $_POST['email']:false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;
        
        if (isset($_POST)) {
            $user = new Usuario();
            $user->setEmail($email);
            $user->setPassword($password);
           
            $identity=$user->login(); 
            if ($identity && is_object($identity)) {
               
                $_SESSION['identity'] = $identity;
                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error'] = "Identificacion fallida";
            }
            
        }
        header("Location:".base_url);
    }
    public function logout()
    {
        
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
        header("Location:".base_url);
    }
}
