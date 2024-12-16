<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Control Formularios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Control de formularios</h2>
        <ul>
            <li>En este ejercicio comprobamos si el valor enviado por POST existe.</li>
            <li>Dependiendo si cargamos por URL o el Botón mostrara un mensaje diferente.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <form action="ficha.php" method="post">
            <h1>Hola desde el index</h1>

            <!--  INPUTS TIPO RADIO -->
            género</br>
            <input type="radio" name="genero" value="Mujer" id="">Hombre<br/>
            <input type="radio" name="genero" value="Hombre" id="">Mujer<br/>
            <input type="radio" name="genero" value="No quiere decirlo" id="">No quiere aportar<br/>

            <hr>
            estudios</br>
            <select name="estudios" id="">
                <option value="ESO">ESO</option>
                <option value="BACHILLER">BACHILLERATO</option>
                <option value="CERTIFICADO PROFESIONAL">CERTIFICADO</option>
                <option value="GRADO SUPERIOR">GRADO SUPERIOR</option>
            </select>

            <hr>
            idiomas</br>
            <input type="checkbox" name="idioma[]" value="Francés" id="">Francés<br/>
            <input type="checkbox" name="idioma[]" value="Inglés" id="">Inglés<br/>
            <input type="checkbox" name="idioma[]" value="Arabe" id="">Arabe<br/>

            <hr>
            <input type="submit" value="Enviar" name="submit">
            <input type="submit" value="Jugar" name="submit">
            <input type="submit" value="Reiniciar" name="submit">
            <input type="submit" value="Borrar" name="submit">

        </form>
        <?php
        // Operador o condicional de valores nulos.
        $opcion = $_POST["submit"] ?? "";
        $genero = $_POST["genero"] ?? "";
        $estudios = $_POST["estudios"] ?? "";
        $idiomas = $_POST["idioma"] ?? "";
        ///////////////////////////////////////////

        // ESTE EJERCICIO ES UN CLARO EJEMPLO DEL RUTEO QUE SE INTRODUJO O TRAJO DE LARAVEL.

        switch($opcion) {
            case "Enviar":
                $msj = "Has presionado el input de enviar";
                echo "<pre>";
                var_dump($genero);
                echo "</pre>";

                echo "<pre>";
                var_dump($opcion);
                echo "</pre>";

                echo "<pre>";
                var_dump($estudios);
                echo "</pre>";

                echo "<pre>";
                var_dump($idiomas);
                echo "</pre>";

                break;
            case "Jugar":
                $msj = "Has presionado el input de jugar";
                break;
            case "Borrar":
                $msj = "Has presionado el input de borrar";
                break;
            default: $msj = "Has presionado el input de reiniciar";
        }
        if(isset($_POST["submit"])){
            $mensaje = "Estas cargando la pagina por que le diste al botón";
        } else {
            $mensaje = "Has solicitado por la URL";
        }
        ?>
        <hr>
        <h2><?=$mensaje?></h2>
        <h2><?=$msj?></h2>
    </div>
</div>
</body>
</html>
