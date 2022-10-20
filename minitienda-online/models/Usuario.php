<?php
require_once 'Model.php';

class Usuario extends Model
{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;


    public function __construct()
    {
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return password_hash($this->databese->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->databese->real_escape_string($nombre);
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $this->databese->real_escape_string($apellidos);
    }

    public function setEmail($email)
    {
        $this->email = $this->databese->real_escape_string($email);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setRol($rol)
    {
        $this->rol = $this->databese->real_escape_string($rol);
    }

    public function setImagen($imagen)
    {
        $this->imagen = $this->databese->real_escape_string($imagen);
    }

    public function save()
    {
        $sql = "INSERT INTO usuarios 
        VALUES(NULL,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}',
        '{$this->getPassword()}','user',NULL)";
        $save = $this->databese->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function login()
    {
        $email = $this->email;
        $password = $this->password;

        $result = false;
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->databese->query($sql);

        if ($login && $login->num_rows == 1) {
            $user = $login->fetch_object();
            $verify = password_verify($password, $user->password);
            if ($verify) {
                $result = $user;
            }
        }
        return $result;
    }
}
