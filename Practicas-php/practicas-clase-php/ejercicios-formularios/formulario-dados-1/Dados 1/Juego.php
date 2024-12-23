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
        <h2>Tirando el dado</h2>
        <ul>
            <li>Aqui definimos el formulario para inciar el juego.</li>
            <li>Como tal solo recibimos el nombre del usuario que introduce, y lo enviamos por POST.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>

        <form action="Ejercicio%20Dados.php" method="post" enctype="multipart/form-data">
            <hr>
            <label for="name" id="name">Introduce tu nombre:</label>
            <input type="text" name="name" id="name">
            <input type="submit" value="Lanzar dato">
        </form>
    </div>
</div>
</body>
</html>
