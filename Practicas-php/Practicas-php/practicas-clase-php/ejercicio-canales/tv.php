<?php

// HACEMOS USO DE UN JSON OBEJECT PARA RECUPERAR LOS DATOS DE UNA API.
$url=  "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
$contenido = file_get_contents($url);
//var_dump($contenido);

// CASTEA EL CONTENIDO A UN ARRAY ASOCIATIVO.
$canales_tv = json_decode($contenido, true);
//var_dump($canales_tv);

foreach ($canales_tv as $index=> $tipo_canales) {
    echo "<h1>{$tipo_canales['name']}</h1>";
    foreach ($tipo_canales['channels'] as $canal) {
        echo "<p>{$canal['name']}</p>";
        /* OTRA FORMA DE HACERLO MAS SENCILLO ES METER ESTO DENTRO DEL ENLACE Y LA IMAGEN.
        $url = $canal['web'];
        $logo = $canal['logol'];
        $nombre = $canal['name'];
        */
        $html_listado .= "<a href='{$canal['web']}'><img src='{$canal['logo']}' alt='{$canal['name']}'></a>";
    }
}
?>

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
        <?=$html_listado?>
    </div>

</div>
</body>
</html>

