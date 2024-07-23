<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div col>
                <h1>Modificar Planes</h1>

                <form action="modificar_plan" method="post">
                    <div class="mb-3">
                        <label for="txtPlanId" class="form-label"></label>
                        <input type="text" id="txtPlanId" name="txtPlanId" class="form-control"
                            placeholder="Ingrese Plan id" value="<?= $datos['plan_id']?> " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label"></label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese su Nombre" value="<?= $datos['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtPagoMensual" class="form-label"></label>
                        <input type="text" id="txtPagoMensual" name="txtPagoMensual" class="form-control" placeholder="Ingrese Pago mensual"
                            value="<?= $datos['pago_mensual']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMinutos" class="form-label"></label>
                        <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control" placeholder="Ingrese Cantidad Minutos"
                            value="<?= $datos['cantidad_minutos']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMensajes" class="form-label"></label>
                        <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['cantidad_mensajes']?>">
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-success form-control" value="Guardar Cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>