<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_gasto, 
                    nombre, 
                    monto, 
                    fecha 
            FROM t_gastos_personales";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-condensed table-hover">
    <thead>
        <th>ID</th>
        <th>Nombre o desc</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) {  
        ?>
        <tr>
            <td><?php echo $mostrar['id_gasto'];?></td>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo "$".$mostrar['monto'];?></td>
            <td><?php echo $mostrar['fecha']; ?></td>
            <td>
                <form action="actualizar.php" method="POST">
                    <input type="text" hidden name="idGasto" value="<?php echo $mostrar['id_gasto']?>">
                    <button class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form action="servidor/eliminar.php" method="POST">
                    <input type="text" hidden name="idGasto" value="<?php echo $mostrar['id_gasto']?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>