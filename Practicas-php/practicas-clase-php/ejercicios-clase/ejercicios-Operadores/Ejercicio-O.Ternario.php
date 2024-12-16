<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Ternario</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejemplo de uso Operador Ternario</h2>
        <ul>
            <li>Esta bien para evaluar dos condiciones de una manera elegante.</li>
            <li>En el primer apartado es el true, y el segundo falso.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $texto = "";
        $numero = mt_rand(1, 100);
        echo ($numero % 2 == 0) ? "$numero Número Par" : "$numero Número Impar";
        ?>
    </div>
</div>
</body>
</html>

