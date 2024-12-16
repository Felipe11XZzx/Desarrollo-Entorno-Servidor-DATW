<?php
$opcion = $_POST["submit"];
$genero = $_POST["genero"];
$estudios = $_POST["estudios"];
$idiomas = $_POST['idioma'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Ficha Formulario</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio Ficha Formulario</h2>
        <ul>
            <li>Desde esta página por asi decirlo recuperamos los datos recuperados anteriormente del formulario.</li>
            <li>Mediante el método POST los recuperamos y los metemos a una tabla.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <table class="table table-bordered border-primary">
            <th class="table table-dark">Resultado Género</th>
            <th class="table table-dark">Resultado Botón</th>
            <th class="table table-dark">Resultado Estudios</th>
            <th class="table table-dark">Resultado Idiomas</th>

            <tr>
                <td class="table-info"><?=$genero?></td>
                <td class="table-info"><?=$opcion?></td>
                <td class="table-info"><?=$estudios?></td>

                <?php
                // FUNCIÓN PARA HACER UN DELIMITADOR Y CONVERSION DE ARRAY A CADENA.
                $idiomas = implode(",",$idiomas);
                echo "<td class='table-info'>$idiomas</td>";
                ?>
            </tr>
        </table>
        <style>
            .table th, .table td {
                width: 25%; /* Cada columna ocupa un 25% */
                text-align: center; /* Centra el texto */
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>

</div>
</body>
</html>
