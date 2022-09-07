<?php
session_start();
if (isset($_POST['send'])) {
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
        $errores['email'] = "Error en el campo email";
    }

    if (!empty($password)) {
        $valid_password = true;
    } else {
        $valid_password = false;
        $errores['password'] = "Error en el campo password";
    }

    $inset_data = false;
    if (count($errores) == 0) {
        //Insert datos
        $inset_data = true;
    } else {
        $_SESSION['errores'] = $errores;
        header("Location: ../../index.php");
    }
}
?>