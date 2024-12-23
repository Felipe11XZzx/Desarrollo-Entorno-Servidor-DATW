<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio desplazamiento binario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Uso del operador de desplazamiento a la izquierda.</h2>
        <ul>
            <li>Este operador toma in valor y desplza sus bits a la izquierda.</li>
            <li>Lo cual hace que se agreguen ceros a la derecha lo que equivale a multiplicar por dos cada desplazamiento.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $potencia_dos = 2;
        for($i = 0; $i <= 10; $i++) {
            $potencia_dos = $potencia_dos << 1;
            echo "$potencia_dos<br>";
        }
        ?>
    </div>

</div>
</body>
</html>