<?php

use Misclases\Usuario;

class Home {
    public $usuario;
    public $entrada;
    public $categoria;

    public function __construct() {
        $this->usuario = new Usuario();
    }
}


$home = new Home();
var_dump($home);

?>  