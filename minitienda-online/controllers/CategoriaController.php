<?php
require_once 'models/Categoria.php';
require_once 'models/Producto.php';
class CategoriaController
{

    function index()
    {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->listAll('categorias');
        require_once 'views/categoria/index.php';
    }

    public function create()
    {
        Utils::isAdmin();
        require_once 'views/categoria/form-create.php';
    }

    public function show()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getRelation();
           
        }
        require_once 'views/categoria/menu-categoria.php';
    }

    public function save()
    {
        if (isset($_POST) && Utils::isAdmin() && isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $categoria = new Categoria();
            $categoria->setNombre($nombre);
            if ($categoria->save()) {
                $_SESSION['correct'] = true;
            }
        }
        header("Location:" . base_url . "categoria/index");
    }
}
