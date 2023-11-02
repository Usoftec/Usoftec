<?php

    $conexion = mysqli_connect("localhost", "root", "", "acceso");
    if($conexion){
        echo 'Conectado';
    }
    else 'No conectado';
?>