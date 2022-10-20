<?php
require_once 'Model.php';
class Categoria extends Model{

    private $id;
    private $nombre;
    
    public function __construct() {
        parent::__construct();
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->databese->real_escape_string($nombre);
    }
    
    public function save()
    {
        $sql = "INSERT INTO categorias VALUES (NULL,'{$this->getNombre()}')";
        $save = $this->databese->query($sql);
        return  ($save) ? true : false ;
    }

    public function getOne()
    {
        $sql = "SELECT * FROM categorias WHERE id = '{$this->getId()}'";
        $result = $this->databese->query($sql);
        return $result->fetch_object();
    }
    
}