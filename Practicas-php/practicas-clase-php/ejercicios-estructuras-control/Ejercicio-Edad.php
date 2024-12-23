<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="../ejercicios-clase/style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio Edades</h2>
        <ul>
            <li>En este ejercicio usamos por primera vez los condicionales if, else if y else.</li>
            <li>Hacemos uso de una sintaxis mas elegante dentro de la propia etiqueta PHP con los condicionales.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $edad = rand(1,30);
        if($edad >= 18): ?>
            <h1>Eres mayor de edad con  esta edad: <?=$edad?> años.</h1>
            <h2>Y por eso te muestro esto</h2>
        <?php else : ?>
            <h1>Eres menor de edad con esta edad: <?=$edad?> años.</h1>
            <h2>Te muestro las imagenes de COLOMBIA VS ECUADOR.</h2>
        <?php endif; ?>
    </div>
</div>
</body>
</html>