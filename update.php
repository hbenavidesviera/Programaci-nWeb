<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database );

$id= $_GET['id'];

$sql = "SELECT * from producto WHERE idProducto='$id'";

$query = mysqli_query($conn, $sql );
$mostrar = mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="editar.php" method="POST">
            <h1>Editar Producto</h1>
            <input type="hidden" name="id" value="<?=$mostrar['IdProducto']?>">
            <input type="text" name="Nombre" place holder="nombre" value="<?= $mostrar['Nombre']?>">
            <input type="text" name="Precio" place holder="precio" value="<?= $mostrar['Precio']?>">
            <input type="text" name="marca" place holder="marca" value="<?= $mostrar['marca']?>">
            <input type="text" name="gramos" place holder="cantidad" value="<?= $mostrar['gramos']?>">
            <input type="submit" value="Actualizar información">

        </form>

    </div>
    
</body>
</html>