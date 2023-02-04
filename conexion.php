<?php
    $host = "mysql-chuox.alwaysdata.net";
    $user = "chuox";
    $clave = "iamdanielpdc123_";
    $bd = "chuox_sis-venta";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
?>
