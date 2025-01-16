<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Racional.php");

// Función para calcular y mostrar el resultado
function imprimeConsola()
{
    $numerador1 = (int) $_POST["numerador1"];
    $denominador1 = (int) $_POST["denominador1"];
    $numerador2 = (int) $_POST["numerador2"];
    $denominador2 = (int) $_POST["denominador2"];

    // Crear objetos de números racionales
    $Racional1 = new Racional($numerador1, $denominador1);
    $Racional2 = new Racional($numerador2, $denominador2);

    // Sumar los racionales
    $sumaRacionales = $Racional1->sumarRacionales($Racional2);

    // Retornar el resultado en formato HTML
    return "<h1>Resultado:</h1><h2>$Racional1 + $Racional2 = $sumaRacionales</h2>";
}

// Inicializar $result para evitar errores si no se envía el formulario
$result = "";

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $result = imprimeConsola();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Racionales</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container text-center mt-3">
        <fieldset>
            <form action="index.php" method="post">
                <h1>Introduce dos números racionales</h1>
                <label for="numerador1">Numerador 1:</label>
                <input type="text" name="numerador1" id="numerador1" required>
                <label for="denominador1">Denominador 1:</label>
                <input type="text" name="denominador1" id="denominador1" required>
                <label for="numerador2">Numerador 2:</label>
                <input type="text" name="numerador2" id="numerador2" required>
                <label for="denominador2">Denominador 2:</label>
                <input type="text" name="denominador2" id="denominador2" required>
                <div class="text-center mt-3">
                    <input class="btn btn-primary" type="submit" value="Calcular" name="submit">
                </div>
            </form>
            <!-- Mostrar el resultado -->
            <div class="mt-4">
                <?= $result ?>
            </div>
        </fieldset>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
