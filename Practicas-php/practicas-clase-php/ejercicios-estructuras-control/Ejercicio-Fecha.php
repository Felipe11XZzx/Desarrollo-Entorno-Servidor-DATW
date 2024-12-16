<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Fechas</title>
    <link rel="stylesheet" href="../ejercicios-clase/style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Manejo Condicionales Con Fechas</h2>
        <ul>
            <li>Uso de Condicionales con el tipo de dato Date().</li>
            <li>Como podemos observar el manero de los operadores condicionales se puede usar como: (AND (&&), OR (| |) ).</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $fecha = date("Y/m/d H:i:s");
        echo "<h1>La Fecha actual es: $fecha</h1>";
        $fecha = date("H:i:s");
        if($fecha >= "08:00:00" && $fecha <= "12:00:00"){
            echo "<h1>!Muy Buenos Dias: La Hora Es: $fecha,¡</h1>";
        } else if($fecha >= "12:00:00" or $fecha <= "18:00:00"){
            echo "<h1>!Muy Buenas Tardes: La Hora Es: $fecha,¡</h1>";
        } else {
            echo "<h1>!Muy Buenas Noches: La Hora Es: $fecha,¡</h1>";
        }
        ?>
    </div>
</div>
</body>
</html>
