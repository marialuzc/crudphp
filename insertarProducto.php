<?php
include_once 'conexion.php';
$idProducto = $_POST['codproducto'];
$nombreProducto = $_POST['nombre'];
$precio = $_POST['precio'];
$idGrupo = $_POST['grupo'];

// INSERT INTO `producto` (`idProducto`, `nombreProducto`, `precio`, `idGrupo`)
// VALUES ('12', 'Pc gamer', '120000', '5')

$sql = "INSERT INTO producto (idProducto, nombreProducto, precio, idGrupo) VALUES ('$idProducto', '$nombreProducto', '$precio', '$idGrupo')";

$resultado = $conn->query($sql);

if (mysqli_connect_errno() != 0) {
    echo "error al insertar" . mysqli_connect_error();

} else {
    echo "Producto insertado correctamente";
    header("location: ListadoProductos.php");
}

mysqli_close($conn);
