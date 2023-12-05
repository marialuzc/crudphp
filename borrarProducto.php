<?php
include_once 'conexion.php';
$idProducto = $_REQUEST['idProducto'];
$sql = "DELETE FROM producto WHERE idProducto=$idProducto";
$resultado = $conn->query($sql);
echo $resultado;
if (!$resultado) {
    echo "<br> error al borrar producto" . mysqli_connect_error();

} else {
    echo "Producto se elimino correctamente";
    header("location: ListadoProductos.php");
}

mysqli_close($conn);
