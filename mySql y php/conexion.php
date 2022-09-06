<?php
    
    /**
     * Creamos una variable de conexion = $conexion 
     * Con el metodo mysqli_connect abrimos una nueva conexion a la base de datos
     * para ello le tendremos que mandar los siguientes parametros:
     * 
     * $host que el nombre del host o de una direccion IP este caso se utiliza el localhost
     * $username que es el nombre se usuario de Mysql
     * $password 
     * $db que nombre de la base de dato que va utilizar cuando realice las consultas.
     * 
    */
    
    //INICIACION DE LAS VARIABLES
    $mysql = array(
        'hostname' => "localhost",
        'username'=>"root",
        'password' => "",
        'db'=>"curso"
    );

    //CONEXION DE A LA BASE DE DATOS
    $conexion = mysqli_connect($mysql['hostname'],$mysql['username'],$mysql['password'],$mysql['db']);
    
    //COMPRAR SI LA CONEXION FUE CORRECTA O NO
    if (mysqli_connect_errno()) {
        print("Error...");
    } else{
        print("conectado...");
    }
    
    //CONFIGURAR EL UTF-8 PARA NO TENER PROBLEMAS CON LA TILDE O CON Ñ
    mysqli_query($conexion,"SET NAMES utf8");

    //INSERTAR DATOS EN LA BASE DE DATOS.
    $sql = "INSERT INTO `persona` VALUES (null,'2102154875','Mariana','Caseres')";
    $query = mysqli_query($conexion, $sql);

    if ($query) print("Datos insertado correctamente");
    else
        print("Error".mysqli_error($conexion));

    //SELECCIONAR UN REGISTRO
    $sql = "SELECT * FROM persona";
    $query = mysqli_query($conexion,$sql);
    while ($consulta = mysqli_fetch_assoc($query)) {
        # code...
        var_dump($consulta);
    }




?>