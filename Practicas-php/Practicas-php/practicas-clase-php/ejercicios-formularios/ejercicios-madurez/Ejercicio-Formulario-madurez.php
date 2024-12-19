<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Madurez</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Uso de la estructura Switch con condicionales booleanos</h2>
        <ul>
            <li>Novedad como podemos ver se pueden incluir expresiones de comprobación booleanas.</li>
            <li>Uso del case con números randoms y condicionales.</li>
        </ul>
    </div>
    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $edad = rand(1, 110);
        $madurez = "";
        switch ($edad) {
            case ($edad >= 0 and $edad <= 2) :
                $madurez = "Eres un bebé";
                 break;
            case ($edad >= 3 and $edad <= 10) :
                $madurez = "Estas en tu mejor etapa la niñez";
                 break;
            case ($edad >= 11 and $edad <= 17) :
                $madurez = "Estas en la flor de la adolescencia";
                 break;
            case ($edad >= 18 and $edad <= 26) :
                $madurez = "Estas en la flor de la juventud";
                break;
            case ($edad >= 27 and $edad <= 59) :
                $madurez = "Estas en la adultez";
                break;
            case ($edad >= 60 and $edad <= 80) :
                $madurez = "Eres un experimentado";
                break;
            default: $madurez = "Disfrutando la vida";
        }
        echo "<h1>Etapa de vida: $madurez, Edad: $edad</h1>";
        ?>
    </div>
</div>
</body>
</html>

