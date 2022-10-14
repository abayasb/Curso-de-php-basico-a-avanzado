<?php

    function viewErrors($errores,$campo)
    {
        $alert = '';
        if (isset($errores[$campo]) && !empty($campo)) {
            $alert = "<div class = 'alert alert-error'>".$errores[$campo].'</div>';
        }
        return $alert;
    }

    function deleteErrors()
    {
      $delete = false;
      if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
       
      }

      if (isset($_SESSION['complete'])) {
        $_SESSION['complete'] = null;
        $delete = true;
      }
      $delete;
    }

