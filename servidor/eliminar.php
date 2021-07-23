<?php

    $idGasto = $_POST['idGasto'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_gastos_personales WHERE id_gasto = '$idGasto'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar, revisa tu query :(";
    }
?>