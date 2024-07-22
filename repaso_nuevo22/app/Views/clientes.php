<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="row justify-content-center">
        <div class="col-auto">
    <h1 class="text-center">CLientes</h1>
    <table class= "table table-striped table-bordered table-dark l1 col col-4">
        <thead class="text-center">
            <tr>
                <th>cliente Id </th>
                <th>Apellido</th>
                <th>Correo Elec.</th>
                <th>Calle av.</th>
                <th>No. casa</th>
                <th>Zona</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($datos as $cliente):?>
            <tr>
                <td> <?php echo $cliente['cliente_id'];?></td>
                <td><?php echo $cliente['apellido']."".$cliente['nombre'];?></td>
                <td><?php echo $cliente['correo_electronico'];?></td>
                <td><?php echo $cliente['calle_avenida'];?></td>
                <td><?php echo $cliente['no_casa'];?></td>
                <td><?php echo $cliente['zona'];?></td>

                <td>
                    <a href="actualizar_cliente/<?php echo $cliente['cliente_id']?>" class="btn btn-primary">Actualizar</a>
                    <a href="eliminar_cliente/<?php echo $cliente['cliente_id']?>" class="btn btn-danger">Eliminar</a>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>