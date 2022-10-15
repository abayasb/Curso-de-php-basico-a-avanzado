<?php

    function autoload($clases)
    {
        require_once 'clases/'.$class.'.php';
    }

    //Registramos

    spl_autoload_register('autoload');

?>