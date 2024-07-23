<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Planes</h1>
    <table class="table table-striped table-border table-dark text-center">
        <thead class="text-center">
            <tr>
                <th>Id Plan</th>
                <th>Nombre</th>
                <th>Pago mensual</th>
                <th>Cantidad de minutos</th>
                <th>Cantidad Mensajes</th>
                <th>Acciones</th>
            </tr>
        </thead>
     
        <tbody>
        <?php foreach($datos as $planes):?>
            <tr>
                <td><?php echo $planes['plan_id'];?></td>
                <td><?php echo $planes['nombre'];?></td>
                <td><?php echo $planes['pago_mensual'];?></td>
                <td><?php echo $planes['cantidad_minutos'];?></td>
                <td><?php echo $planes['cantidad_mensajes'];?></td>
                <td>
                  <a href="buscar_plan/<?= $planes['plan_id']?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
                  <a href="eliminar_plan/<?= $planes ['plan_id']?>"  class="btn btn-danger"><i class="bi bi-person-dash-fill"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
     
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>