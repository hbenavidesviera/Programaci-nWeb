<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database );
$id = null;
$nombre = $_POST['Nombre'];
$precio = $_POST['Precio'];
$marca = $_POST['marca'];
$cantidad = $_POST['gramos'];

$sql ="INSERT INTO producto (Nombre, Precio, marca, gramos) Values ('$nombre', '$precio', '$marca', '$cantidad')";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: panelAdmin.php");
};

?>