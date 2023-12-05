<?php
include_once 'conexion.php';
$idProducto = $_REQUEST['idProducto'];
$sql = "SELECT * FROM producto WHERE idProducto ='$idProducto'";
$resultado = $conn->query($sql);
// var_dump($resultado);
$fila = $resultado->fetch_assoc();
//echo $fila['nombreProducto'];
// var_dump($fila);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar productos</title>
</head>
<body>
<center>
   <h2>Formulario de modificar producto</h2>
    <form action="modicarProducto.php" method="post">
        Codigo Producto: <input type="number" name="codproducto" id="" readonly value="<?php echo $fila['idProducto']; ?>">
        <br>
        Nombre: <input type="text" name="nombre" id="" value="<?php echo $fila['nombreProducto']; ?>">
        <br>
        Precio:<input type="number" name="precio" id="" value="<?php echo $fila['precio']; ?>">
        <br>
        Grupo: <input type="number" name="grupo" id="" value="<?php echo $fila['idGrupo']; ?>">
        <br>
        <input type="submit" value="Modificar">
    </form>
    </center>
</body>
</html>
