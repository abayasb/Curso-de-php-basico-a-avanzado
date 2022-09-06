<?php
    /**
     * Ejercicio 1.
     * Crear una funcion donde se valide un correo con el metodo filter_var
     * recoger la variable por el metodo GET y validarla para despues mostrar
     * un mensaje de validado
    */

    function is_mail($mail)
    {
        if (!empty($mail)) {
            $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
            return $mail;
        }
    }
    if(isset($_GET['correo'])){
        $mail = $_GET['correo'];
        if (is_mail($mail)) {
            echo "<h2>Correo $mail ingresado es el correcto</h2>";
        }else{
            echo "<h2>Correo $mail ingresado no es el correcto</h2>";
        }
    }else{
        echo "<h2>Error no ingreso parametros para el GET</h2>";
    }
    
?>