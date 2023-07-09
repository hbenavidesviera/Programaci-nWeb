<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database );

$id= $_GET['id'];

$sql= "DELETE FROM producto WHERE idProducto='$id'";

$query = mysqli_query($conn, $sql);
if($query){
    Header("Location: panelAdmin.php");
};


?>