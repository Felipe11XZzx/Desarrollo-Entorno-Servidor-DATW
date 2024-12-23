<?php
$nombre = $_POST['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="style.css">
    <style>
        button {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
<h1>Estoy en PONG</h1>
<main>
    <form action="Ejercicio%20Ping.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Opciones del Boton PONG</legend>
            <label for="boton" class="boton">Dale Click al boton para ir a Ping</label>
            <input type="text" name="boton" id="boton">
            <h2>Solicitud realizada en PONG por el usuario: <?php echo "$nombre"?></h2>
            <input type="submit" class="boton" id="boton">Ir a Ping</input>
        </fieldset>
    </form>
</main>
</body>
</html>
