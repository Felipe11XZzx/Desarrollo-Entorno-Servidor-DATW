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
            background-color: rgba(58, 172, 90, 0.9);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Estoy en PING</h1>
    <main>
        <form action="Ejercicio%20Pong.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Opciones del Boton PING</legend>
                <label for="boton" class="boton">Dale Click al boton para ir a Pong</label>
                <h2>Solicitud realizada en PING por el usuario: <?php echo "$nombre"?></h2>
                <input type="submit" class="boton" id="boton">Ir a Pong</input>
            </fieldset>
        </form>
    </main>
</body>
</html>
