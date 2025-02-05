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

echo "<h2>Insert</h2>";
// Prepare
$sentencia = $conexion->prepare("INSERT INTO libros (titulo, estanteriaID) VALUES (:titulo, :estanteriaID)");
// Bind
$titulo = "El libro de la Selva 3";
$estanteriaID = 3;
$sentencia->bindValue(':titulo', $titulo);

$sentencia->bindValue(':estanteriaID', $estanteriaID);
// Excecute
if($sentencia->execute()) {
    echo "<p>¡Nuevo libro añadido!</p>";
}
// $conexion->lastInsertId() devuelve el último ID que se ha insertado
echo "<p>El último libroID añadido ha sido". $conexion->lastInsertId()."</p>";

//Devuelve el número de filas afectadas por la última sentencia ejecutada
echo "<p>Se han visto afectadas en la ultima sentencia un toral de ".$sentencia->rowCount()." filas</p>";
echo "<h2>Update</h2>";
// Prepare
$sentencia2 = $conexion->prepare("UPDATE libros SET titulo=:titulo WHERE libroID=:libroID");

// Bind
$sentencia2->bindValue(':titulo', "El libro de la selva 5");
$sentencia2->bindValue(':libroID', 101);

// Excecute
if($sentencia2->execute()) {
    echo "<p>¡Libro modificado!</p>";
    //Devuelve el número de filas afectadas por la última sentencia ejecutada
    echo "<p>Se han visto afectadas en la ultima sentencia un toral de ".$sentencia->rowCount()." filas</p>";
}

echo "<h2>Select</h2>";
// Select
$sentencia3 = $conexion->prepare("SELECT * FROM libros");
// Especificamos el fetch mode antes de llamar a fetch()
$sentencia3->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$sentencia3->execute();

echo "<p>Se han obtenido ".$sentencia3->rowCount()." resultados</p>";
// Mostramos los resultados
while ($libro = $sentencia3->fetch()){
    echo "El libro " . $libro["titulo"]." está en la estantería ".$libro["estanteriaID"]."<br>";
}

echo "<h2>Cierre</h2>";
//Cerramos la conexión porque no la vamos a usar más
$conexion = null;
echo "Adiós";
?>