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
            <li>Implementamos el uso del bucle for con 6000 tiradas, para contar la probabilidad de las caras.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <h2><?=$nombreJugador?> has sacado con los dados esto :</h2>
        <?php
        $contadorUno = 0;
        $contadorDos = 0;
        $contadorTres = 0;
        $contadorCuatro = 0;
        $contadorCinco = 0;
        $contadorSeis = 0;
        $tiradas = 6000;

        for($i = 0; $i < $tiradas; $i++) {
            $numImage = rand(1,6);
            match ($numImage) {
                1 => $contadorUno++,
                2 => $contadorDos++,
                3 => $contadorTres++,
                4 => $contadorCuatro++,
                5 => $contadorCinco++,
                6 => $contadorSeis++,
                default => $contador += $contadorUno + $contadorDos + $contadorTres + $contadorCuatro + $contadorCinco + $contadorSeis,
            };
        }
        ?>

        <img src="img/dado_1.png" alt=\"dado-numero$numImage\">
        <h1>La cara número uno ha salido esta cantidad de veces: <?=$contadorUno?>, Desviacion de: <?=abs($contadorUno / 6000)?></h1>

        <img src="img/dado_2.png" alt=\"dado-numero$numImage\">
        <h1>La cara número dos ha salido esta cantidad de veces: <?=$contadorDos?>, Desviacion de: <?=abs($contadorDos / 6000)?></h1>

        <img src="img/dado_3.png" alt=\"dado-numero$numImage\">
        <h1>La cara número tres ha salido esta cantidad de veces: <?=$contadorTres?>, Desviacion de: <?=abs($contadorTres / 6000)?></h1>

        <img src="img/dado_4.png" alt=\"dado-numero$numImage\">
        <h1>La cara número cuatro ha salido esta cantidad de veces: <?=$contadorCuatro?>, Desviacion de: <?=abs($contadorCuatro / 6000)?></h1>

        <img src="img/dado_5.png" alt=\"dado-numero$numImage\">
        <h1>La cara número cinco ha salido esta cantidad de veces: <?=$contadorCinco?>, Desviacion de: <?=abs($contadorCinco / 6000)?></h1>

        <img src="img/dado_6.png" alt=\"dado-numero$numImage\">
        <h1>La cara número seis ha salido esta cantidad de veces: <?=$contadorSeis?>, Desviacion de: <?=abs($contadorSeis / 6000)?></h1>
        <h1>Fin del juego...</h1>
    </div>
</div>
</body>
</html>