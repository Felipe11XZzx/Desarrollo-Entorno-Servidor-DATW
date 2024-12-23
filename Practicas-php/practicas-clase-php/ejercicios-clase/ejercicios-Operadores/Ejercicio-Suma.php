<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio Operador Aritmetico Suma +</h2>
        <ul>
            <li>Uso del operador aritmetico suma en php.</li>
            <li>Cálculamos la suma de todos los elementos de esos números con un bucle While.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
            $contador = 0;
            $numero = 25;
            $suma = 0;

            while($contador < $numero) {
                $suma += $contador;
                $contador++;
            }

            echo "<h1>El resultado de la suma es: $suma</h1>";
        ?>
    </div>

</div>
</body>
</html>
