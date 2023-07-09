<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<nav class="nav" class="navbar navbar-expand-lg bg-body-tertiary">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="Index.php">Inicio</a>
  <a class="nav-link" href="Productos.php">Productos</a>
  <a class="nav-link" href="Contacto.php">Contacto</a>
  <a class="nav-link" href="acceso.php">Login</a>
</nav>
<br><br><br>
<h1> Nuestros productos</h1>
<body>
<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database )
?> 

<br> <br>
<table class="table table-striped">
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