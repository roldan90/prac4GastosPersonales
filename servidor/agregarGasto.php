<?php

    $nombre = $_POST['nombre'];
    $monto = $_POST['monto'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_gastos_personales (nombre, monto) VALUES ('$nombre', '$monto')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar, no sé porque :(";
    }

?>