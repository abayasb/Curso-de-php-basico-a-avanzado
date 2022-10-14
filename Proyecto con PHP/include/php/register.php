<?php

if (isset($_POST['send'])) {
    require_once('../config/conexion.php');
    //Recoger los valores del formulario registro
    $nombre =  (isset($_POST['nombre'])) ? $_POST['nombre'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : false;

    $errores = array();

    //Validar los datos antes de guardarlos en la base de datos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $valid_nombre = true;
    } else {
        $valid_nombre = false;
        $errores['nombre'] = "Error en el campo nombre";
    }

    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) {
        $valid_apellido = true;
    } else {
        $valid_apellido = false;
        $errores['apellido'] = "Error en el campo apellido";
    }
    
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid_email = true;
    } else {
        $valid_email = false;
        $errores['email'] = "Error en el campo emails";
    }

    if (!empty($password)) {
        $valid_password = true;
    } else {
        $valid_password = false;
        $errores['password'] = "Error en el campo password";
    }
    //var_dump(mysqli_error($conexion));
	//die();
    
    $inset_data = false;
    if (count($errores) == 0) {
        var_dump((count($errores)));
        
        //Insert datos
        $inset_data = true;
        $password_security = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        $sql = "INSERT INTO usuario VALUES('null','$nombre','$apellido','$email','$password_security',CURDATE());";
        $save = mysqli_query($conexion, $sql);

        if ($save) {
            $_SESSION['complete'] = "Registro exitoso";
            var_dump($_SESSION['complete']);
        } else {
            $_SESSION['errores']['general'] = "Error al guardar";
            var_dump( $_SESSION['errores']['general']);
        }
    } else {
        $_SESSION['errores'] = $errores;
        var_dump( $_SESSION['errores']);
    }
}
header("Location: ../../index.php");
