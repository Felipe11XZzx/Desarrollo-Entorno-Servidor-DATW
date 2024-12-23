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
        <h2>Texto enunciado breve</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        echo "<table>";
        for($i = 0; $i < 5; $i++) {
            echo "<th>Num Código</th>
                  <th>Caracter Código</th>";
        }
        echo "<tr>";
        for($numeroAscii = 33; $numeroAscii <= 126; $numeroAscii++) {
            $codigo = chr($numeroAscii);
            echo "<td>$numeroAscii</td> <td>$codigo</td>";
            if(($numeroAscii + 3) % 5 == 0) {
                echo"</tr> <tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
        ?>
    </div>

</div>
</body>
</html>

