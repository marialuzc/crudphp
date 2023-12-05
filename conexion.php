<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "bdalmacenmlc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $bd);

// Check connection
if (!$conn) {
    die("Conexion Fallida: " . mysqli_connect_error());
}
echo "Conexion Exitosa";
