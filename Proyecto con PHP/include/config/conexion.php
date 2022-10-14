<?php
    include_once('../config/config.php');
    $conexion = mysqli_connect($con['HOSTNAME'],$con['USERNAME'],$con['PASSWORD'],$con['DB']);
    mysqli_query($conexion, "SET NAMEs 'utf8'");
    if(mysqli_connect_error()){
        echo "<h2>Error</h2>".mysqli_connect_error().$con['HOSTNAME'].$con['USERNAME'].$con['PASSWORD'];
    }

    session_start();
?>