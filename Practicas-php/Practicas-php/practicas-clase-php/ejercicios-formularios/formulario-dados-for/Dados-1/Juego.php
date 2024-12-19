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
        <form action="Ejercicio%20Dados.php" method="post">
            <div style="margin: 0px auto;width:100%; text-align: center">
                <button type="submit" name="dado" value="1">
                    <img src="img/dado_1.png" alt="">
                </button>
                <button type="submit" name="dado" value="2">
                    <img src="img/dado_2.png" alt="">
                </button>
                <button type="submit" name="dado" value="3">
                    <img src="img/dado_3.png" alt="">
                </button>
                <button type="submit" name="dado" value="4">
                    <img src="img/dado_4.png" alt="">
                </button>
                <button type="submit" name="dado" value="5">
                    <img src="img/dado_5.png" alt="">
                </button>
                <button type="submit" name="dado" value="6">
                    <img src="img/dado_6.png" alt="">
                </button>
        </form>
    </div>
</div>
</body>
</html>
