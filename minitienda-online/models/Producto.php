<?php
require_once 'Model.php';
class Producto extends Model
{
    private $id;
    private $nombre;
    private $categoria_id;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $imagen;
    private $fecha;

    public function __construct()
    {
        parent::__construct();
    }

    function getId()
    {
        return $this->id;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getCategoria_id()
    {
        return $this->categoria_id;
    }

    function getDescripcion()
    {
        return $this->descripcion;
    }

    function getPrecio()
    {
        return $this->precio;
    }

    function getStock()
    {
        return $this->stock;
    }

    function getOferta()
    {
        return $this->oferta;
    }

    function getImagen()
    {
        return $this->imagen;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setNombre($nombre)
    {
        $this->nombre = $this->databese->real_escape_string($nombre);
    }

    function setCategoria_id($categoria_id)
    {
        $this->categoria_id = ($categoria_id);
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion = $this->databese->real_escape_string($descripcion);
    }

    function setPrecio($precio)
    {
        $this->precio = $this->databese->real_escape_string($precio);
    }

    function setStock($stock)
    {
        $this->stock = $this->databese->real_escape_string($stock);
    }

    function setOferta($oferta)
    {
        $this->oferta = $this->databese->real_escape_string($oferta);
    }

    function setImagen($imagen)
    {
        $this->imagen = $this->databese->real_escape_string($imagen);
    }

    public function save()
    {
        $sql = "INSERT INTO productos VALUES (
            NULL,'{$this->getCategoria_id()}','{$this->getNombre()}','{$this->getDescripcion()}',
            '{$this->getPrecio()}','{$this->getStock()}',
            '{$this->getOferta()}',CURDATE(),'{$this->getImagen()}');";


        $result = $this->databese->query($sql);

        return ($result) ? true : false;
    }

    public function update()
    {
        $sql = "UPDATE productos SET categoria_id = '{$this->getCategoria_id()}',nombre='{$this->getNombre()}',
        descripcion='{$this->getDescripcion()}',precio='{$this->getPrecio()}',stock='{$this->getStock()}',
        oferta='{$this->getOferta()}'";
        
        if ($this->getImagen()) {
            $sql .= ", imagen='{$this->getImagen()}'";
        }

        $sql .= " WHERE id='{$this->getId()}';";
        $result = $this->databese->query($sql);
        
        return $result ? true : false;
    }

    public function getOne()
    {
        $sql = "SELECT * FROM productos WHERE id = '{$this->getId()}'";
        $result = $this->databese->query($sql);
        return $result->fetch_object();
    }

    public function delete()
    {
        $sql = "DELETE FROM productos WHERE id='{$this->getId()}'";
        $result = $this->databese->query($sql);
        return $result ? true : false;
    }

    public function getRandom()
    {
        $sql = "SELECT * FROM productos ORDER BY RAND()";
        $result = $this->databese->query($sql);
        return $result;
    }

    public function getRelation()
    {
        $sql = "SELECT productos.*, categorias.nombre FROM productos INNER JOIN categorias ON categorias.id = productos.categoria_id WHERE productos.categoria_id = {$this->getCategoria_id()}";
        $result = $this->databese->query($sql);
        return $result;
    }
   
}
