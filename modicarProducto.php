<?php
include_once 'conexion.php';
$idProducto = $_POST['codproducto'];
$nombreProducto = $_POST['nombre'];
$precio = $_POST['precio'];
$idGrupo = $_POST['grupo'];

// UPDATE `producto` SET `nombreProducto` = 'Teclado d', `precio` = '30000', `idGrupo` = '1' WHERE `producto`.`idProducto` = 2

$sql = "UPDATE producto SET nombreProducto = '$nombreProducto', precio = '$precio', idGrupo = '$idGrupo' WHERE idProducto ='$idProducto'";

$resultado = $conn->query($sql);

if (mysqli_connect_errno() != 0) {
    echo "error al actualizar" . mysqli_connect_error();
} else {
    echo "Producto actualizado correctamente";
    header("location: ListadoProductos.php");
}

mysqli_close($conn);
