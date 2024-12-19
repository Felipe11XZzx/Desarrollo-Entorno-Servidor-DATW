<?php
// Verifica si se ha enviado un formulario con el botón "submit".
if(isset($_POST["submit"])){
    // Recupera el valor de 'clicks' del formulario (si existe), o lo establece en 0 si no está definido.
    $clicks = $_POST['clicks'] ?? 0;
    $clicks++;
    $mensaje = "Se han aumentado los clicks: $clicks";
} else {
    $mensaje = "Haz clicks para contarlos porfa.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Clicks HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio Clicks HTML</h2>
        <ul>
            <li>En este ejercicio vemos la utilidad de los inputs invisibles.</li>
            <li>Comprobamos el uso de las variables por post que existen.</li>
        </ul>
    </div>

    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <fieldset>
            <legend>Cuenta clicks</legend>
            <form action="clicks.php" method="post">
                <input type="submit" value="Haz click" name ="submit">
                <input type="hidden" name="clicks" value='<?=$clicks?>' id="">
            </form>
            <?=$mensaje?>
        </fieldset>
    </div>
</div>
</body>
</html>