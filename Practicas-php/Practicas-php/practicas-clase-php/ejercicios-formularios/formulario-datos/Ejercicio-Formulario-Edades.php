<?php
$edad = $_POST['edad'];
$nombre = $_POST['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Datos Personales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Etapas de la vida</h2>
        <ul>
            <li>Hacemos uso de los inputs para posteriormente recuperarlos por el método _POST.</li>
            <li>Implementamos la creación del formulario.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <main>
            <form action="resuelve.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>A Continuación introduce tu edad: </legend>
                    Nombre <input type="text" name="nombre">
                    <hr>
                    Edad <input type="text" name="edad"/>
                    <input type="submit" value="enviar">
                </fieldset>
            </form>
        </main>
    </div>
</div>
</body>
</html>