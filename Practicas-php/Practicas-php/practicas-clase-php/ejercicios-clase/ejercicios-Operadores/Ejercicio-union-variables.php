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
        <h2>Ejercicio Concatenar Variables en PHP</h2>
        <ul>
            <li>Vemos el uso del . ("Punto"), para unir cadenas de caracteres.</li>
            <li>Imprimos las cadenas concatenadas con el echo.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $nombre = "Felipe_";
        $apellido = "Ortiz";
        $nombre_completo = $nombre.$apellido;
        echo "<h1>Mi nombre completo es: $nombre_completo</h1>";
        echo "Mi nombre es: ".$nombre_completo;
        ?>
    </div>

</div>
</body>
</html>

