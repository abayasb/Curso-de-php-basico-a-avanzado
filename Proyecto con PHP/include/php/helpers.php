<?php

    function viewErrors($errores,$campo)
    {
        $alert = '';
        if (isset($errores[$campo]) && !empty($campo)) {
            $alert = "<div class = 'alerta alerta-error'>".$errores[$campo].'</div>';
        }
        return $alert;
    }

    function deleteErrors()
    {
       return session_unset();
       
    }

