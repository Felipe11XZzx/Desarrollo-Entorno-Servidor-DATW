<?php
$direccionIP='127.0.0.1';
$usuario='felipe';
$pass='estrullaizo';
$nombre_bd='biblioteca';

echo "<h1>Ejemplo libros</h1>";

echo "<h2>Abrimos conexión</h2>";
try {
    $datos_conexion = "mysql:host=localhost;dbname=$nombre_bd";
    $conexion = new PDO($datos_conexion, $usuario, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Para evitar SQLinjection
    $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


} catch (PDOException $e){
    echo $e->getMessage();
    //Si la conexión da error termino la ejecución
    exit;
}
echo "La conexión ya está lista";


echo "<h2>Select</h2>";
// Select
$sentencia3 = $conexion->prepare("SELECT * FROM libros");
// Especificamos el fetch mode antes de llamar a fetch()
$sentencia3->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$sentencia3->execute();

echo "<p>Se han obtenido ".$sentencia3->rowCount()." resultados</p>";
// Mostramos los resultados
while ($libro = $sentencia3->fetch()) {
    echo "<a href='http://localhost//html/practicas-clase-php/ejercicio-BD-php/verLibro.php?libroID=".$libro["libroID"] . "'>El libro " . $libro["titulo"] . "</a><br>";
}

echo "<h2>Cierre</h2>";
//Cerramos la conexión porque no la vamos a usar más
$conexion = null;
echo "Adiós";
?>