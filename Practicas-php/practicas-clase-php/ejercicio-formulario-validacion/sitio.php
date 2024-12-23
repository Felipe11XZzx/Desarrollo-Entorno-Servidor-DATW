<?php

// RECUPERAMOS LOS DATOS DEL INDEX POR METODO GET, Y VALIDAMOS QUE LOS CAMPOS DEL FORMULARIO NO ESTEN VACIOS.

$name = $_GET["user"];
$password = $_GET["passwd"];
    if ($name == "" && $password == "") {
        $msj = ("por favor rellene el formulario");
        // CAMBIAMOS LA CABECERA O URL SI EN EL FORMULARIO NO SE HAN INTRODUCIDO DATOS.
        header("Location: index.php?error=$msj");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Inicio Sesión APP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="box">
        <h2>Recuperamos los valores del formulario anterior</h2>
        <ul>
            <li>Implementamos la recuperación de los datos por medio del método GET.</li>
            <li>Incluimos tambien el uso de un botón ("Enlace Bootstrap"), para volver al inicio.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <div class="container text-center">
            <!-- IMPRIMIMOS EL VALOR RECUPERADO DEL NOMBRE QUE RECOGEMOS POR GET -->
            <h1>¡Bienvenido: <?=$name?>!</h1>
            <a class="btn btn-danger" href="index.php">Cerrar Sesión</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>
