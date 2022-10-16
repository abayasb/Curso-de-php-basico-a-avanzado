<?php
require_once 'Model.php';
class Nota extends Model{
    private $titulo;
    private $descripcion;
    private $id_usuario;


    public function __construct() {
        parent::__construct();
    }


    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function save()
    {
        $sql = "INSERT INTO notas (id_usuario,titulo,descripcion,fecha)
        VALUES ({$this->id_usuario},'{$this->titulo}','{$this->descripcion}',CURDATE());";
        
        $save = $this->db->query($sql);
        
        return $save;
    }

}