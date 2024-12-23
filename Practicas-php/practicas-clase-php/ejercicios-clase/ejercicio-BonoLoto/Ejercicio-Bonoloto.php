<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio BonoLoto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Texto enunciado breve</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        do {
            $numero_1 = mt_rand(1, 50);
            $numero_2 = mt_rand(1, 50);
        } while (($numero_1 == $numero_2));

        do {
            $numero_3 = mt_rand(1, 50);
        } while (($numero_3 == $numero_2 || $numero_3 == $numero_1));

        do {
            $numero_4 = mt_rand(1, 50);
        } while (($numero_4 == $numero_3 || $numero_4 == $numero_2 || $numero_4 == $numero_1));

        do {
            $numero_5 = mt_rand(1, 50);
        } while ($numero_5 == $numero_4 || $numero_5 == $numero_3 || $numero_5 == $numero_2 || $numero_5 == $numero_1);
        ?>

        <legend>Numeros BonoLoto</legend>
            <span class="bonoloto"><?=$numero_1?></span>
            <span class="bonoloto"><?=$numero_2?></span>
            <span class="bonoloto"><?=$numero_3?></span>
            <span class="bonoloto"><?=$numero_4?></span>
            <span class="bonoloto"><?=$numero_5?></span>
    </div>
</div>
</body>
</html>

