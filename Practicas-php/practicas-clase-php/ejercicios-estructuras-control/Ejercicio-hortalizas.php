<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Notas</title>
    <link rel="stylesheet" href="../ejercicios-clase/style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Variables de variables</h2>
        <ul>
            <li>Uso de la declaraci&oacute;n de variables de PHP</li>
            <li>Asignacion del valor de esa variable declarada previamente: {$$nombreVariable}</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $modulo1 = "PHP";
        $modulo2 = "HTML";
        $modulo3 = "MySQL";
        $estudiante = "Felipe";
        $hortaliza = "Tomates";
        $$hortaliza = 2.75;
        echo "<h1>El precio de los: $hortaliza es de: ${$hortaliza}&euro;</h1>";

        $hortaliza = "Cebollas";
        $$hortaliza = 2.25;
        echo "<h1>El precio de las: $hortaliza es de: {$$hortaliza}&euro;</h1>";

        $hortaliza = "Puerros";
        $$hortaliza = 2.50;
        echo "<h1>El precio de los: $hortaliza es de: {$$hortaliza}&euro;</h1>";
        ?>
    </div>

</div>
</body>
</html>
