<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database );
$id = $_POST['id'];
$nombre = $_POST['Nombre'];
$precio = $_POST['Precio'];
$marca = $_POST['marca'];
$cantidad = $_POST['gramos'];

$sql ="UPDATE producto set Nombre='$nombre', Precio='$precio', marca='$marca', gramos='$cantidad' where idProducto='$id'";
$query = mysqli_query($conn, $sql);
if($query){
    Header("Location: panelAdmin.php");
};

?>