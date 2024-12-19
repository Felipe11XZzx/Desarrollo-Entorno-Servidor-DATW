<?php
$nombreJugador = $_POST['name'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Parqués</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Juego del Parqués</h2>
        <ul>
            <li>Mediante el uso del método POST, recupero el dado.</li>
            <li>El dado es la imagen con el número random.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <h2><?= $nombreJugador ?> has sacado con los dados esto :</h2>
        <?php
            $contadorSeis = 0;
            $tiradas = 0;
        while($contadorSeis != 2) {
                $tiradas++;
                $numImage = rand(1,6);
                $pathImage =  "img/dado_$numImage.png";
                $pathImage = match ($numImage) {
                    1 => $pathImage = "img/dado_1.png",
                    2 => $pathImage = "img/dado_2.png",
                    3 => $pathImage = "img/dado_3.png",
                    4 => $pathImage = "img/dado_4.png",
                    5 => $pathImage = "img/dado_5.png",
                    6 => $pathImage = "img/dado_6.png"
                };

            echo "<img src=\"$pathImage\" alt=\"dado-numero$numImage\">";

            if($numImage == 6 || $contadorSeis == 2) {
                $contadorSeis++;
                echo "<h1>HAS GANADO FELICITACIONES: <?=$contadorSeis?></h1>";
            }
                else {
                    $contadorSeis = 0;
                    echo "<h1>Cantidad de dados con la cara número 6: <?=$contadorSeis?></h1>";
                }
        }
        ?>
            <h1>Fin del juego has ganado en esa cantidad de tiradas: <?=$tiradas?></h1>
    </div>
</div>
</body>
</html>