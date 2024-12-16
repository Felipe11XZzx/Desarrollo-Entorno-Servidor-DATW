<?php
$entero = rand(1, 200);
$decimal = rand(1, 10);

// CREAR FLOAR EN FORMATO NOTACION CIENTIFICA.
$numero = (float) $entero."E+".$decimal;
echo "<h1>$numero</h1>";
echo "<hr/>";
$numero = number_format($numero, 2, ",", ".");
echo "<h1>$numero</h1>";

