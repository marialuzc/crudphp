<?php
include "conexion.php";

// consultar tabla productos

$consulta = "SELECT * FROM producto ORDER BY nombreProducto";
$resultado = $conn->query($consulta);

$numregProductos = $resultado->num_rows;
if ($numregProductos == 0) {
    echo "No hay productos para mostrar";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
<center>
    <h1>Listado de productos</h1>
    <br>
    <a href="frmprodnuevo.php">Nuevo Producto</a>
    <br>
    <table>
      <tr>
        <th>Codigo</th>
        <th>Nombre Producto</th>
        <th>Precio</th>
        <th>Eliminar</th>
        <th>Modificar</th>
      </tr>
    <?php
while ($fila = $resultado->fetch_assoc()) {
    ?>
            <tr>
            <td>
                <?php echo $fila['idProducto']; ?>
            </td>
            <td>
                <?php echo $fila['nombreProducto']; ?>
            </td>
            <td>
                <?php echo $fila['precio']; ?>
            </td>
            <td><a href="borrarProducto.php?idProducto=<?php echo $fila['idProducto']; ?>">Eliminar</a></td>
            <td><a href="frmmodproducto.php?idProducto=<?php echo $fila['idProducto']; ?>">Modificar</a></td>
            </tr>
    <?php
}

?>
    </table>
  </center>

</body>
</html>