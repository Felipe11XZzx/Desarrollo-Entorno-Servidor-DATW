<?php

    // FUNCION PARA LA VALIDACION DE CREDENCIALES DEL FORMULARIO.
    function validarCampos(String $nombre, String $validacion) : bool{
        if($nombre === $validacion){
            return true;
        }
        return false;
    }

    // VALIDAMOS SI EL VALOR DEL SUBMIT ES VERDADERO ("SI SE PRESIONA EL INPUT ENTRARA Y RECOGERA LOS DATOS").

    if(isset($_POST["submit"])){
        $user = htmlspecialchars($_POST["user"]);
        $pass = htmlspecialchars($_POST["passwd"]);
        if(validarCampos($user, $pass)){
            // RECOGEMOS LOS DATOS DE LA CABECERA Y CAMBIAMOS LA URL SOLO SI SE CUMPLE LA VALIDACION.
            header("location: sitio.php?user=$user");
            exit();
        }
        $error = "Datos invalidos";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Comprobación Formulario</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio Formulario Inicio Sesión</h2>
        <ul>
            <li>En este ejercicio implemetamos el uso de validación de un formulario sencillo.</li>
            <li>Recuperamos el nombre del usuario y la contraseña para posteriormente, si todo esta correcto pasar a otro sitio.</li>
        </ul>
    </div>

    <!-- IMPRIMIMOS EL MENSAJE DE ERROR SI NO SE INGRESAN CORRECTAMENTE LOS DATOS -->
    <div class="box mb-3"> <?=$error?>
        <h2>Resultado</h2>
        <hr>
        <form action="index.php" method="post">
            <div class="container-fluid text-center mb-3">
                <fieldset>
                    <div style="color:red; font-size:1.2em "><?=$error??""?></div>
                    <legend class="mb-3">Formulario Inicio Sesión</legend>
                    <label for="user-input" class="form-label">Nombre Usuario: </label>
                    <input type="text" name="user" value="" id="user-input" class="form-control">
                    <br>
                    <label for="pass-input" class="form-label">Contraseña Usuario: </label>
                    <input type="password" name="passwd" value="" id="pass-input" class="form-control">
                    <br>
                    <div class="container-fluid justify-content-center">
                        <input class="btn btn-success" type="submit" name="submit" value="Iniciar Sesión">
                    </div>
                    <br>
        </form>
        </fieldset>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>

