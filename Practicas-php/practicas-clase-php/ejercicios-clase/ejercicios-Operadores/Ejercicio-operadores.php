<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio Operadores de Concatenación</h2>
        <ul>
            <li>Vemos el uso de como se pueden concatenar los distintos tipos de datos o variables.</li>
            <li>Tambien podemos analizar como php interpreta ciertas relaciones de concatenación</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $cadena1 = "Hola ";
        $cadena2 = "Delfin";
        $result = $cadena1.$cadena2;

        echo "<h1>$cadena1 + $cadena2</h1>";
        echo "<h1>$result</h1>";

        $opc1 = "10 Nieves";
        $opc2 = "20";
        $res = $opc1 + $opc2;
        echo "<h1>$opc1 + $opc2</h1>";
        echo "<h1>$opc1 + $opc2 = $res</h1>";
        ?>
    </div>
</div>
</body>
</html>
