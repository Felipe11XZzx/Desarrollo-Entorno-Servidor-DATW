<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Factura</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Ejercicio Factura</h2>
        <ul>
            <li>Implementando el uso del Heredoc ("Plantilla de escritura de un contenido amplio de texto.").</li>
            <li>Uso de la funci&oacute;n str_pad(nombreVariable, longitudVariable, caracterSeparacion, alineacionTexto) sirva para dar formato a las cadenas.</li>
            <li>Uso de la funci&oacute;n number_format(nombreVariable, cantidadDecimales).</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <?php

        // DECLARACION DE VARIABLES.
        $num_factura = 1;
        $nombre_cliente = "Juan Pérez";
        $fecha = date("d/m/y");
        $producto1 = "Cuadros";
        $precio1 = rand(1, 100);
        $precio2 = rand(1, 100);
        $producto2 = "Luminarias intensas";
        $subtotal = $precio1 + $precio2;
        $iva = $subtotal * 0.21;
        $total = $subtotal + $iva;

        //FORMATEAR TODOS LOS NUMEROS Y SALIDA DE TEXTO DARLES ESPACIOS ADELANTE.
        $num_factura = str_pad($num_factura, 3, 0, STR_PAD_LEFT);
        $producto1 = str_pad($producto1, 26, " ", STR_PAD_RIGHT);
        $producto2 = str_pad($producto2, 26, " ", STR_PAD_RIGHT);

        $precio1 = number_format($precio1, 2);
        $precio2 = number_format($precio2, 2);
        $subtotal = number_format($subtotal, 2);
        $iva = number_format($iva, 2);

        $precio1 = str_pad($precio1, 25, " ", STR_PAD_LEFT);
        $precio2 = str_pad($precio2, 25, " ", STR_PAD_LEFT);
        $factura = <<<MIFACTURA
<pre>
================================================================
                       FACTURA Número: $num_factura;
================================================================

Cliente: "$nombre_cliente"
Fecha: "$fecha"

Productos:
1. $producto1 $precio1$
2. $producto2 $precio2$

                  Subtotal:                       $subtotal$
                  IVA (21%)                       $iva$     
- - - - - - - - - - - - - - - - - - - - - - - - - 
            Total a pagar:                        <b>$total$</b>
     ¡Gracias por su compra,!  <b>'$nombre_cliente'</b>  
================================================================           
</pre>
MIFACTURA;
        echo $factura;
        ?>
    </div>

</div>
</body>
</html>