<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Meses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Primer uso del condicional Switch</h2>
        <ul>
            <li>Es importante tener en cuenta que al no poder separara por comas , anidamos casos de uso.</li>
            <li>Ejercicio por finalizar.</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php
        $mes = rand(1, 30);
        switch ($mes) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $dias = 31;
                break;
            case 2:
                $dias = 29;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                $dias = 30;
                break;
            default:
                $dias = "Fecha no valida";
        }
        ?>
    </div>

</div>
</body>
</html>

