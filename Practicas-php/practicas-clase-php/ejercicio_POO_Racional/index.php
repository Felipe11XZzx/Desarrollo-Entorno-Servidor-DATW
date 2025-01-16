<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Racional.php");

function imprimeConsola()
{
    $numerador1 = (int) $_POST["numerador1"];
    $denominador1 = (int) $_POST["denominador1"];
    $numerador2 = (int) $_POST["numerador2"];
    $denominador2 = (int) $_POST["denominador2"];
    $result = "";

    if (!isset($_POST["Calcular"])) {
        $Racional1 = new Racional($numerador1, $denominador1);
        $Racional2 = new Racional($numerador2, $denominador2);
        //$Racional3 = new Racional(7,5);
        $sumaRacionales = $Racional1->sumarRacionales($Racional2);

        // Muestra los resultados
        //echo "<h1>Antes de sumar al R1 el R2: $Racional1</h1>";
        $result .= "<h1>Despues de sumar al R1 el R2: $Racional1 + $Racional2 = $sumaRacionales</h1>";
    }
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
    <div class="container fluid text-center mt-3">
        <fieldset>
            <form action="index.php" method="post">
                <h1>Introduce dos numeros</h1>
                <label for="numerador1"> Introduce el númerador 1</label>
                <input type="text" name="numerador1" id="numerador1">
                <label for="denominador1"> Introduce el denominador 1</label>
                <input type="text" name="denominador1" id="denominador1">
                <label for="numerador2"> Introduce el númerador 2</label>
                <input type="text" name="numerador2" id="numerador2">
                <label for="denominador2"> Introduce el denominador 2</label>
                <input type="text" name="denominador2" id="denominador2">
                <div class="container fluid text-center">
                    <input class="btn-input" type="submit" value="Calcular" name="submit">
                    <?php
                    if (isset($_POST['numerador1']) && isset($_POST["denominador1"]) && isset($_POST["numerador2"]) && isset($_POST["denominador2"])) {
                        imprimeConsola();
                        $result;
                    }
                    ?>
                </div>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </fieldset>
    </div>
</body>

</html>