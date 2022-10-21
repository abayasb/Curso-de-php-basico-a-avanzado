
<?php
require_once 'models/Producto.php';
class CarritoController
{
    public function index()
    {

       
        if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) {
            $carrito = $_SESSION['carrito'];
        } else {
            $carrito = array();
        }
        
        require_once 'views/carrito/index.php';
    }

    public function add()
    {
        //Verificar si tenemos el id del producto
        if (isset($_GET['id'])) {
            $producto_id = $_GET['id'];
        } else {
            header("Location:" . base_url);
        }
            /**
             * en casi de existir un producto en el carrito vamos a aumentar 
             * en uno las unidades del producto
             * Esto rrecorriento la session carrito e interactuar con el indice
             * de las unidades para aumentarlas 
           */

        if(isset($_SESSION['carrito'])){
			$counter = 0;
			foreach($_SESSION['carrito'] as $indice => $elemento){
				if($elemento['id_producto'] == $producto_id){
					$_SESSION['carrito'][$indice]['unidades']++;
					$counter++;
				}
			}	
		}

        /**
         * Apartado para cuando recien se añade al carrito un producto 
         * se consulta al modelos producto y posteriormente se crea una session
         * carrito para insertar los valores correspondiente
         */
        if (!isset($counter) || $counter == 0) {
            //conseguir el producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            //Añadir al carrito
            if (is_object($producto)) {
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }
        header("Location:" . base_url . "carrito/index");
    }

    public function delete_all()
    {
        unset($_SESSION['carrito']);
        header("Location:" . base_url . "carrito/index");
    }
}
