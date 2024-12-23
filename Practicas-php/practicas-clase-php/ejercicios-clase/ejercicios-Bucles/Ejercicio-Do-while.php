<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Suma - Do-While</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Uso de la estructura condicional Do-While.</h2>
        <ul>
            <li>Generamos un número aleatorio del 1 al 15.</li>
            <li>Luego realizamos la suma de estos valores y los contabilizamos.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
            $numerosGenerados = 0;
            $suma = 0;
            do {
                $numerosGenerados++;
                $numRandom = rand(1,15);
                $suma += $numRandom;
                if($numRandom == 13) {
                    echo "<h1 style='color: #007BFF'>Has Ganado el número es el 13.</h1>";
                }
            } while($numRandom != 13);
            ?>
        <h1>suma de los números generados: <?=$suma?></h1>
        <h1>Cantidad de números generados: <?=$numerosGenerados?></h1>
        <button type="reset" style="background-color: #007BFF"><a href="Ejercicio-Do-while.php" style="color: white" , style="text-decoration:none">Iniciar Juego de nuevo</a></button>
    </div>
</div>
</body>
</html>
