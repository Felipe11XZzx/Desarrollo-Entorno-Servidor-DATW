<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica: Tabla Tipos de Operadoes en PHP</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #004080;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Práctica: Tabla Tipos de Operadores en PHP</h1>
<table>
    <thead>
    <tr>
        <th>Tipo de Expresión</th>
        <th>Ejemplo</th>
        <th>Resultado</th>
        <th>Explicación Breve</th>
    </tr>
    </thead>
    <tbody>
    <?php

    // FUNCIONES PARA COMPROBACION DE ERRORES EN EL SERVIDOR APACHE MIRAR DESDE LA TERMINAL DE LINUX.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    function generarFila(string $tipo, string $codigo, $resultado, string $explicacion):string {
        $fila="<tr>";
        $fila.="<td>$tipo</td>";
        $fila.="<td>$codigo</td>";
        $fila.="<td>$resultado</td>";
        $fila.="<td>$explicacion</td>";
        $fila.="</tr>";
        return $fila;
    }

    // Ejemplo de funciones
    // Funciones aritméticas.
    function sumar() {
        $x = 10;
        $y = 5;
        $resultado = $x + $y;
        return generarFila("Aritmética", "$x + $y", $resultado, "Suma de dos enteros.");
    }

    function restar() {
        $x = 5;
        $y = 2;
        $resultado = $x - $y;
        return generarFila("Aritmética", "$x - $y", $resultado, "Restar de dos enteros.");
    }

    // Funciones de comparación.
    function igual() {
        $x = 4;
        $y = 4;
        return generarFila("Comparación", "$x == $y", "true", "Comparamos si ambos valores son iguales y devolvemos verdadero, ('true').");
    }

    function menorque() {
        $x = 4;
        $y = 8;
        return generarFila("Comparación", "$x < $y", "true", "Nos devuelve true ya que el primer valor 4 número es menor que el segundo 8, ('true').");
    }

    // Funciones de incremento y decremento.
    function preincremento() {
        $numero1 = 0;
        $representacion = ++$numero1;
        return generarFila("Incremento", "++0", "$representacion", "Incrementa la variable antes de ser usado la variable por ejemplo, la defini en cero cada vez incrementa de uno en uno.");
    }

    function predecremento() {
        $numero1 = 5;
        $representacion = --$numero1;
        return generarFila("Decremento", "--$5", "$representacion", "Disminuye el valor de la variable de uno en uno por ejemplo, la variable la defini en 5 ahora al usar el operador su valor númerico es 4.");
    }

    // Funciones de asignación compuesta.
    function asignacionSuma() {
        $numero = 0;
        $numero += 10;
        $representacion = "$numero";
        return generarFila("Asignación Compuesta (Suma)", "0", "$representacion", "Suma a la variables que creamos el valor que le indiquemos en mi caso la cree en 0 y le asigne el valor compuesto de 10");
    }

    function asignacionPotencia() {
        $numero = 2;
        $representacion = $numero *= 4;
        return generarFila("Asignación Compuesta (Multiplicación)", "2", "$representacion", "Multiplicamos nuestra variables 2 por la cantidad que le indiquemos, en este caso multiplicamos 2 *= 4.");
    }

    function asignacionCadena() {
        $saludo = "hola";
        $saludo .= " soy felipe";
        return generarFila("Asignacion Compuesta (Concatenación)", "hola .= 'soy felipe'", "$saludo", "Con el uso del .= Unimos dos cadenas en este caso la primera cadena es hola, y la segunda soy felipe, el resultado final es algo tal como hola soy felipe.");
    }

    // Funciones de operadores referencia.
    function operadorReferencia() {
        $numero = 4;
        $y = 0;
        $posicionMemoria = &$numero;
        return generarFila("Asignación por referencia", "&$y = $numero", "$posicionMemoria", "Este operador nos puede interesar utilizarlo para reducir el tamaño de variables y mejorar la productividad en memoria de los programas.");
    }

    // Funciones de operadores bit a bit.

    function operadorAnd() {
        return generarFila("Operador Bit a Bit (AND)", "numero1 = 1 && numero2 = 2", "true", "Este tipo de operador lo utilizados para comprobar si dos condiciones se cumplen como en este caso.");
    }

    function operadorOr() {
        return generarFila("Operador Bit a Bit (OR)", "numero1 = 1 || numero2 = 8", "true", "Este tipo de operador lo utilizados para comprobar si una de las dos condiciones es verdadera no se tiene que cumplir estrictamente las dos condiciones.");
    }

    // Funcion de control de errores.

    function controlErrores() {
        return generarFila("Operador de control de errores", "@", "@resultado = 10 / 9balones;", "Lo utilizamos en casos donde nos interese silenciar los errores o las notificaciones de warnings.");
    }

    // Funcion de ejecucion.

    function ejecucioncomandos() {
        return generarFila("Operador de ejecución 'Comandos'", "`ls -ld`", "-rwxr-xr-x  1 usuario grupo 12345 Mar 12 09:34 archivo.txt", "Este operador con el uso de comillas nos deja utilizar y ejecutar comandos desde PHP, basados en el Sistema Operativo que se este usando.");

    }

    // Funciones operadores logicos.

    function logicoAND() {
        $y = 4;
        $x = 8;
        return generarFila("Operador Lógico (AND)", "y = $y and x = $x", "(X == 4 and Y == 8), Resultado = ('True')", "Si ambos valores son iguales nos devuelve true, es muy util a la hora de comparar valores identicos o condiciones dobles.");
    }

    function logicoOR() {
        $y = 4;
        $x = 8;
        return generarFila("Operador Lógico (AND)", "y = $y or  x = $x", "(X == 4 or Y >= 8), Resultado = ('True')", "Nos devuelve true si al menos uno de los valores es cierto o se cumple la condición, es util a la hora de evaluar una condición o  la otra.");
    }

    function imprimirContenido() {
        echo sumar();
        echo restar();
        echo igual();
        echo menorque();
        echo preincremento();
        echo predecremento();
        echo asignacionSuma();
        echo asignacionPotencia();
        echo operadorReferencia();
        echo operadorAnd();
        echo operadorOr();
        echo controlErrores();
        echo ejecucioncomandos();
        echo logicoAND();
        echo logicoOR();
        echo asignacionCadena();
    }

    echo imprimirContenido();
    ?>
    </tbody>
</table>
</body>
</html>
