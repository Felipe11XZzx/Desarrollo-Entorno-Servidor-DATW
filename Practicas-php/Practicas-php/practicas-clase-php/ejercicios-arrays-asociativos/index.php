<?php
function crea_formulario (array $tienda ):string{
    $html="";
    foreach ($tienda as $producto => $datos) {
        $html .= "<label id =$producto>$producto</label>\n";
        $html .= "<input type='text' name='$producto'  ><br />\n\n";
    }
    return $html;
}

$productos = [
    'Lechuga' => ['unidades' => 200,
        'precio' => 0.90],
    'Tomates' =>['unidades' => 2000,
        'precio' => 2.15],
    'Cebollas' =>['unidades' => 3200,
        'precio' => 0.49],
    'Fresas' =>['unidades' => 4800,
        'precio' => 4.50],
    'Manzanas' =>['unidades' => 2500,
        'precio' => 2.10],
    'Borraja' =>['unidades' => 4800,
        'precio' => 4.50],
    'Patatas' =>['unidades' => 2500,
        'precio' => 2.10],
];

$html_formulario_productos = crea_formulario($productos);

    /*CREAMOS LA FACTURA*/
    //leer los datos de compra
    //generar cada línea de factura (de cada producto al precio unidades y subtotal)
    //Llevar el acumulado y mostrar el total

    function crear_factura(array $tienda ):string{
        if (!isset($_POST["submit"])) {
            $html = "
           <div class='container fluid text-center mt-3'>
                <fielset>
                <legend>Factura del supermercado</legend>
           <div class='container fluid text-center mt-3'>
                <table class='table table-striped'>
                    <tbody>
                        <tr>
                          <th scope='row'>Producto de la tienda</th>
                          <th>Cantidad del Producto</th>
                          <th>Precio del Producto</th>
                          <th>Unidades disponibles</th>
                        </tr>";
        }

        foreach ($tienda as $producto => $datos) {
            $cantidad = (int)$_POST["$producto"];
            $precio = ($datos['precio'] * $cantidad);
            $unidades = $datos['unidades'];
            $total += $precio;
            var_dump($total);

            if($cantidad > $datos['unidades']) {
                $cantidad = $datos['unidades'];
            }

            if($cantidad > 0) {
                /*
                $html .= "
                <tr>
                <td>$producto</td>
                <td>$cantidad</td>
                <td>$precio €</td>
                <td>$unidades</td>
                </tr>";
                */

                // DE ESTA FORMA ESTABA HACIENDO ANTERIORMENTE LA RECUPERACION DE LOS DATOS.
              /*  $html .= "<p>Nombre del producto: $producto</p>";
                $html .= "<p>Cantidad Producto: $cantidad</p>";
                $html .= "<p>Precio del Producto: $precio</p>";
                $html .= "<p>Unidades disponibles: $unidades</p>";
                $html .= "<hr>";
              */
            }
        }
        $html .= "</tbody>
            </div>
                <h4 style='color:#007BFF'>Total Comprado: $total €</h4><hr>
                </fielset>
                </table>
            </div>";
        return $html;
    }
    function crear_inventario(array $tienda ):string{

        $html = " <div class='container fluid text-center mt-3'>
                <fielset>
                <legend>Inventario del supermercado</legend>
           <div class='container fluid text-center mt-3'>
                <table class='table table-striped'>
                    <tbody>
                        <tr>
                          <th scope='row'>Nombre del producto</th>
                          <th>Género del producto inicial</th>
                          <th>Unidades disponibles</th>
                          <th>Unidades vendidas</th>
                          <th>Valor por unidad</th>
                        </tr>";

        foreach ($tienda as $producto => $datos) {
            $unidades = $datos['unidades'];
            $precio = $datos['precio'];
            $cantidad = (int)$_POST["$producto"];
            if (!isset($_POST["submit"])) {
                $unidadesDisponibles = 0;
            } else {
                $unidadesDisponibles = $unidades - (int)$_POST["$producto"];
                $html .= "
                <tr>
                <td>$producto</td>
                <td>$unidades</td>
                <td>$unidadesDisponibles</td>
                <td>$cantidad</td>
                <td>$precio €</td>
                </tr>";
                $sumaProducto += $cantidad;
            }
        }
        $html .= "
              
              </tbody>
              </div>
                  <h4 style='color:#007BFF'>Total Unidades vendidas: $sumaProducto</h4><hr>
                  </fielset>
                  </table>
              </div>";
        return $html;
    }

    //Si he apretado el botón submit
    if (isset($_POST["submit"])){
    // AL MOMENTO DE PRESIONAR EL BOTON DE COMPRAR SE NOS DEBERIAN GENERAR TANTO LA FACTURA COMO EL INVENTARIO.
    $html_crear_factura = crear_factura($productos);
    $html_crear_inventario = crear_inventario($productos);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Supermercado</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container fluid text-center mt-3">
    <fieldset>
    <form action="index.php" method="post">
        <?php
            if(!isset($html_crear_factura)){
                echo "<legend>Productos para comprar</legend>";
                echo "$html_formulario_productos";
        } else {
                echo "$html_crear_inventario";
                echo "$html_crear_factura";
            }
        ?>
        <div class="container fluid text-center">
            <input class="btn-input" type="submit" value="Comprar" name="submit">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</fieldset>
</div>
</body>
</html>