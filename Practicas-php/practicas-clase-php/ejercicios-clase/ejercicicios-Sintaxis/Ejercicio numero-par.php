<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio M&oacute;dulo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio uso condicionales</h2>
        <ul>
            <li>Hacemos uso del m&oacute;dulo % que nos da el resto de la divisi&oacute;n del n&uacute;mero.</li>
            <li>Uso del condicional if (Estructura booleana).</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $numero = rand(1, 101);
        if($numero % 2 == 0){
            echo"<h1>!HAS GANADO EL PREMIO¡ : $numero</h1>";
        } else {
            echo"<h1>!El N&uacute;mero es : $numero;¡</h1>";
        }
        ?>
    </div>
</div>
</body>
</html>
