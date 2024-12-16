<?php
$edad = $_POST ['edad'];
$nombre = $_POST ['nombre'];
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
        <h2>Recuperamos por POST los valores del formulario anterior</h2>
        <ul>
            <li>Uso de una nueva sintaxis la cual es los condicionales de Php.</li>
            <li>Es una practica buena y codigo limpio el implementar el uso de estos condicionales.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
         <?php if($edad >= 18):?>
        <legend>Vida De Mayor</legend>
        <h1>La Vida Es Dura</h1>
        <?php elseif ($edad <= 14):?>
        <legend>Vida De Niño</legend>
        <h1>La Vida Is Belle</h1>
        <?php endif; ?>
    </div>
</div>
</body>
</html>