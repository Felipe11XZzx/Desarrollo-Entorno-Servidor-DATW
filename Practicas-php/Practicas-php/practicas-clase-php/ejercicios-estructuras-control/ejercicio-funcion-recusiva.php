<?php
function saludar($mensaje)
{
    if ($mensaje == "Facha") {
        $mensaje = "SOS FACHA \n";
        echo $mensaje;
    } else {
        echo $mensaje = "Que pasa amiguito \n";
    }
    return $mensaje;
}
saludar("Facha");
function factorial(int $num)
{
    // ESTABLECER CONDICION DE TERMINACION.

    // MISMO FUNCIONAMIENTO PERO CON OPERADOR TERNARIO.
    // return ($num == 0) ? 1 : $num * factorial($num - 1);

    if ($num == 1) {
        return 1;
    } else {
        echo "Factorial $num <hr/>";
        return $num * factorial($num - 1);
    }
}
factorial(7);

function fibonacci(int $num)
{
    if ($num == 0) {
        return 0;
    } else {
        echo "Fibonacci $num <hr/>";
        $num = 0;
        return $num +  1 + fibonacci($num + 1);
    }
}
fibonacci(7);
?>