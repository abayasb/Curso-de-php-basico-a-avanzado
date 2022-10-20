<?php
require_once 'models/Producto.php';
class ProductoController
{

    function index()
    {
        $producto = new Producto();
        $productos = $producto->getRandom();
        require_once 'views/producto/producto-destacado.php';
    }

    public function create()
    {
        $edit = false;
        require_once 'views/producto/form-producto.php';
    }

    public function gestion()
    {
        Utils::isAdmin();
        $producto = new Producto();
        $productos = $producto->listAll('productos');
        require_once 'views/producto/gestion.php';
    }

    public function save()
    {

        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $categoria_id = isset($_POST['categorias']) ? $_POST['categorias'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $oferta = isset($_POST['oferta']) ? $_POST['oferta'] : false;

            if ($nombre && $categoria_id && $descripcion && $precio) {
                //INSTANCIAR LA MODELO
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setCategoria_id($categoria_id);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setOferta($oferta);
                if (isset($_FILES['imagen'])) {
                    $file = $_FILES['imagen'];
                    $filename = $file['name'];
                    $mimetipy = $file['type'];
                    if ($mimetipy == "image/jpg" || $mimetipy == "image/jpeg" || $mimetipy == "image/png") {
                        if (!is_dir('uploads/image')) {
                            mkdir('uploads/image', 0777, TRUE);
                        }
                        move_uploaded_file($file['tmp_name'], 'uploads/image/' . $filename);
                        $producto->setImagen($filename);
                    }
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto->setId($id);
                    $save = $producto->update();
                }else{
                    $save = $producto->save();
                }
                if ($save) {
                    $_SESSION['producto'] = "correct";
                } else {
                    $_SESSION['producto'] = "Error";
                }
            } else {
                $_SESSION['producto'] = "Error";
            }
        } else {
            $_SESSION['producto'] = "Error";
        }

        header("Location:" . base_url . "producto/gestion");
    }

    public function delete()
    {

        if (isset($_GET['id'])) {
            $id = isset($_GET['id']) ? $_GET['id'] : false;
            $producto = new Producto();
            $producto->setId($id);
            if ($producto->delete()) {
                $_SESSION['delete'] = 'correct';
            } else {
                $_SESSION['delete'] = 'error';
            }
        } else {
            $_SESSION['delete'] = 'error';
        }

        header("Location:" . base_url . "producto/gestion");
    }

    public function edit()
    {
        $edit = true;
        if (isset($_GET['id'])) {
            $id = isset($_GET['id']) ? $_GET['id'] : false;
            $producto = new Producto();
            $producto->setId($id);
            $producto = $producto->getOne();
        }
        require_once 'views/producto/form-producto.php';
    }

    public function show()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $producto = $producto->getOne();
        }
       require_once 'views/producto/view-producto.php';
    }
}
