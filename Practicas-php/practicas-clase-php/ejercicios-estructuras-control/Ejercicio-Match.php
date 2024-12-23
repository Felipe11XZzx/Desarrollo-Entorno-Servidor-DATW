<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Condicional Match</title>
    <link rel="stylesheet" href="../ejercicios-clase/style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Uso del match con el ejercicio de los meses.</h2>
        <ul>
            <li>Es interesante valorar y tener en cuenta esta estructura.</li>
            <li>Por que puede valorar varios tipos de expresiones.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $numeroMes = rand(1, 15);
        $span = "";
        $numeroDias = match ($numeroMes) {
            1, 3, 5, 7, 8, 10, 12 => $numeroDias = 31,
            2 => $numeroDias = 29,
            4, 6, 9, 11 => $numeroDias = 30,
            default => "Número incorrecto"
        };
        if (is_numeric($numeroDias)) :?>
            <h1 style="color: #007BFF; text-align: center">El mes es : <?= $numeroMes ?> y tiene esta cantidad de
                dias: <?= $numeroDias ?>.</h1>
        <?php else: ?>
            <h1 style='color: darkred; text-align: center'>Mes incorrecto: Número mes <?= $numeroMes ?></h1>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
