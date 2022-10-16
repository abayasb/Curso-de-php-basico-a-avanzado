<?php
require_once 'Model.php';
class Usuario extends Model{
    private $nombre;
    private $apellido;
    private $email;
    private $password;

    public function __construct() {
        parent::__construct();
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    public function save()
    {
        $sql = "INSERT INTO usuarios (nombre , apellido, email, password, fecha) 
        VALUES ('{$this->nombre}','{$this->apellido}','{$this->email}','{$this->password}',CURDATE());";
        $save = $this->db->query($sql);
        return $save;
    }

}

?>