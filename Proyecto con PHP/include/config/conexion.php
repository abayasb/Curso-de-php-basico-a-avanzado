<?php
    require_once('./config/config.php');
    $conexion = mysqli_connect($con['HOSTNAME'],$con['USERNAME'],$con['PASSWORD'],$con['DB']);
    mysqli_query($conexion, "SET NAMEs 'utf8'");
    if(mysqli_connect_error()){
        echo "<h2>Error</h2>";
    }

    session_start();
?>