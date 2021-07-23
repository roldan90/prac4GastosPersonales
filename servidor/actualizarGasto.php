<?php 

    $idGasto = $_POST['idGasto'];
    $nombre = $_POST['nombre'];
    $monto = $_POST['monto'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_gastos_personales 
            SET nombre = '$nombre', 
                monto = '$monto' 
            WHERE id_gasto = '$idGasto'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }