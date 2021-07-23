
<?php include "header.php"; ?>

    
    <!-- Page Content -->
    <div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Gastos Personales</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="servidor/agregarGasto.php" method="POST">
                            <label for="nombre">Nombre o descripcion</label>
                            <textarea name="nombre" cols="30" rows="5" class="form-control" required></textarea>
                            <label for="monto">Monto</label>
                            <input type="number" name="monto" required class="form-control">
                            <br>
                            <button class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Tabla de gastos</h3>
                        <?php include "tablaGastos.php";?>
                    </div>
                </div>
            </p>
        </div>
    </div>
    </div>


<?php include "footer.php"; ?>

