<?php

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videojuegos playstation 2</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="recursos/css/bootstrap.min.css" rel="stylesheet">
    <link href="recursos/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-3">
        <h2 class="text-center">Videojuegos playstation 2</h2>

        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ventana_1"><i class="fa-solid fa-circle-plus"></i> Alta de datos</a>
            </div>
        </div>

        <table class="table table-sm table-striped table-hover mt-4">
            <thead class="table-primary">
                <tr>
                    <th><i>id</i></th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Género</th>
                    <th>Imagen</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>

            </tbody>

        </table>

        <?php include 'nuevaVentana.php'; ?>




    </div>

    <script src="recursos/js/bootstrap.bundle.min.js"></script>
</body>
</html>