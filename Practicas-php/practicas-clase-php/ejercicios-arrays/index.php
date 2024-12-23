<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Ejercicio Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Iniciación con el uso de los ejercicios Arrays.</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php

            function aleatorio() {
                return rand(0, 10);
            }

            function cuadrado(int $Pnum) :int {
                return ($Pnum * $Pnum);
            }

            // EJEMPLO FUNCION ANONIMA EN PHP.
            $calcular_cuadrado = function (int $Pnum) :int {
                return ($Pnum * $Pnum);
            };

            function agregarIndice(array $contenido, int $Pindex) :String {
                $cadena = $contenido.$contenido[$Pindex++];
                return $cadena;
            };

            $notas = [10, 9, 8, 7];
            var_dump($notas);

            $notas[2] = 9.9;
            echo "<hr>";
            var_dump($notas);

            echo "<hr>";
            $listadoAlumnos["DAWT"] = [1, 2, 3, 4];;
            $listadoAlumnos["Felipe"] = 9;
            var_dump($listadoAlumnos);

            echo "<hr>";
            $listadoMascotas = array_fill(0, 10, 0);
            //var_dump($listadoMascotas);

            $listadoMascotas = array_map("aleatorio", $listadoMascotas);
            var_dump($listadoMascotas);

            echo "<hr>";
            // OTRA MANERA DE HACERLO TAMBIEN CON EL MISMO FUNCIONAMIENTO ES PASANDOLE EN EL PRIMER PARAMETRO LA FUNCION CUADRADO.
            $listadoCuadrados = array_map($calcular_cuadrado, $listadoMascotas);
            var_dump($listadoMascotas);

            echo "<hr>";
            var_dump($listadoCuadrados);

            $palabras = ["sol", "mar", "luz", "cielo", "vida", "paz", "amor", "libro", "flor", "sueño"];
            //agregarIndice($palabras, $posiciones);
            // var_dump($palabras);

            foreach ($palabras as $posicion => $palabra) {
                echo "<h1>El valor en la posicion es $posicion es $palabra</h1>";
                $palabras_sufijo[] = "0".$posicion++."_".$palabra;
                echo "<hr>";
                echo "<h1>Palabras con sufijo: <?=$palabras_sufijo?></h1>";
            }

            $agregar_prefijo = function ($item, $pos) {
                return "0{$pos}_{$item}";
            };

            $prefijos = array_map($agregar_prefijo, $palabras,array_keys($palabras));
            var_dump($prefijos);
        ?>
    </div>
</div>
</body>
</html>

