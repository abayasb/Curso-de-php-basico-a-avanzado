<?php
session_start();
include_once 'config/autoload.php';
require_once 'config/database.php';
require_once 'config/params.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/siderbar.php';

function error()
{
    $error = new ErrorController();
    $error->index();
}

if (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $classController = controller_defaul;
    $controller = new $classController();
    $defaul_action = action_default;
    $controller->$defaul_action();
}else{
    if (isset($_GET['controller'])) {
        $classController = $_GET['controller'] . 'Controller';
        if (isset($_GET['controller']) && class_exists($classController)) {
            $controller = new $classController();
            if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
                $action = $_GET['action'];
                $controller->$action();
            } else {
                error();
            }
        } else {
            error();
        }
    } else {
        error();
    }
}



require_once 'views/layout/footer.php';
