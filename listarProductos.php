<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tabla de Productos</h1>
        <a href="egregarProductos.php" class="btn btn-success mb-2">Agregar Producto</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Precio</td>
                    <td>Categoría</td>
                </tr>
            </thead>
            <tbody>
    <?php
    include "modelo/conexion.php";
    $sql = $conexion->query("SELECT * FROM tblproductos");
    while ($datos = $sql->fetch_object()) { ?>
        <tr>
            <td><?= $datos->id ?></td>
            <td><?= $datos->proNombre ?></td>
            <td><?= $datos->proDescripcion ?></td>
            <td><?= $datos->proCategoria?></td>
            <td>
                <button type="button" class="btn btn-primary">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </td>


        </tr>
    <?php } ?>
</tbody>
        </table>
    </div>
</body>
</html>

