<h1>Welcome </h1>

<?php

require_once 'config/autoload.php';

$classController = $_GET['controller'] . 'Controller';
if (isset($_GET['controller']) && class_exists($classController)) {
    $controller = new $classController();
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    } else {
        echo "No existe la vista".$_GET['action'];
    }
}else{
    echo "Clase ".$classController. ' No existe';
}
