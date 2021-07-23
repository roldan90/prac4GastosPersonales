<?php

    $idGasto = $_POST['idGasto'];

    //traemos la conexion
    include "servidor/conexion.php";
    $conexion = conexion();
    //debemos obtener los datos asociados

    $sql = "SELECT id_gasto, 
                    nombre, 
                    monto, 
                    fecha 
            FROM t_gastos_personales 
            WHERE id_gasto = '$idGasto'";
    $respuesta = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($respuesta);
?>

<?php include "header.php"; ?>

    
    <!-- Page Content -->
    <div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Editar gasto</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="servidor/actualizarGasto.php" method="POST">
                            <input type="text" name="idGasto" value="<?php echo $datos['id_gasto'] ?>" hidden>
                            <label for="nombre">Nombre o descripcion</label>
                            <textarea name="nombre" 
                                        cols="30" 
                                        rows="5" 
                                        class="form-control" 
                                        required ><?php echo $datos['nombre']?></textarea>
                            <label for="monto">Monto</label>
                            <input type="number" name="monto" required class="form-control" 
                                    value="<?php echo $datos['monto'] ?>">
                            <br>
                            <button class="btn btn-warning">Actualizar</button>
                        </form>
                    </div>
                </div>
            </p>
        </div>
    </div>
    </div>


<?php include "footer.php"; ?>

