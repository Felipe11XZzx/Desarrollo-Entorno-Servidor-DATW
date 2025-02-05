<?php
$direccionIP='127.0.0.1';
$usuario='felipe';
$pass='estrullaizo';
$nombre_bd='biblioteca';

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

if (isset($_GET["libroID"])) {
    $libroID = $_GET["libroID"];
} else {
    echo "ERROR la pagina no exite";
    exit();
}

// Select
// $sentenciaNombreLibro = $conexion->prepare("SELECT * FROM libros WHERE libroID=:libroID");
$sentenciaNombreLibro = $conexion->prepare("SELECT * FROM libros LEFT JOIN estanterias ON libros.estanteriaID = estanterias.estanteriaID WHERE libroID=:libroID");
$sentenciaNombreLibro->bindValue(':libroID', $libroID);
// Especificamos el fetch mode antes de llamar a fetch()
$sentenciaNombreLibro->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$sentenciaNombreLibro->execute();
$libro = $sentenciaNombreLibro->fetch();

echo "<h1>El libro es: {$libro['titulo']}</h1>";
if (isset($libro["estanteriaID"])) {
    echo "Se encuentra en la sala {$libro['sala']} en la estanteria {$libro['estanteriaID']} que es de color {$libro['color']}";
} else {
    echo "ERROR el libro no tiene estanteria";
    exit();
}
//Cerramos la conexión porque no la vamos a usar más
$conexion = null;
?>