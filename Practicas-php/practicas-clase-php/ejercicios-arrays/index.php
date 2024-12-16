<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Ejercicio Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Iniciación con el uso de los ejercicios Arrays.</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
            $notas = [10, 9, 8, 7];
            var_dump($notas);

            $notas[2] = 9.9;
            echo "<hr>";
            var_dump($notas);

            echo "<hr>";
            $listadoAlumnos["DAWT"] = [1, 2, 3, 4];;
            $listadoAlumnos["Felipe"] = 9;
            var_dump($listadoAlumnos);
        ?>
    </div>
</div>
</body>
</html>

