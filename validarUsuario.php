

<?php
include_once 'conexion.php';
$Usuario = $_POST['Usuario'];
$Clave = $_POST['Clave'];

$sql = "SELECT * FROM usuario WHERE idUsuario = $Usuario and clave = '$Clave';";
echo $sql;
$resultado = $conn->query($sql);
$numusuarios = $resultado->num_rows;
//echo $numusuarios;
if ($numusuarios == 1) {
    // Mostrar menu del admon
    header("location: menuadmon.php");
} else {
    header("location:index.php");
}
mysqli_close($conn);
?>
