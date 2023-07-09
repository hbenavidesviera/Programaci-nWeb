<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="nav">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="Index.php">Inicio</a>
  <a class="nav-link" href="Productos.php">Productos</a>
  <a class="nav-link" href="Contacto.php">Contacto</a>
  <a class="nav-link" href="acceso.php">Login</a>

<h1> Nuestros productos</h1>
<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database )
?> 

<br> <br>
<table>
    <tr>
        <td>Nombre</td>
        <td>precio</td>
    </tr>

    <?php 
    $sql = "SELECT * from producto";
    $result = mysqli_query($conn, $sql);
    
    while($mostrar= mysqli_fetch_array($result)){
    ?>    

   
    
    <tr>
        <td><?php echo $mostrar['Nombre'] ?></td>
        <td><?php echo $mostrar['Precio'] ?> </td>
    </tr>
<?php    
}
?>
</table>    
    
</body>
</html>