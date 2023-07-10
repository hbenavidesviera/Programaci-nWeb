<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<!-- navegador -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="#">M&M</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acceso.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accesoAdmin.php">Login-Administrador</a>
          <li class="nav-item">
          <a class="nav-link" href="Contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body background="img/background.jpg">
<!-- titulo de la pag -->
<header>
<h1 style="background-color:orange;"> Nuestros productos</h1>
</header>


<!-- base de datos para la tabla de productos -->

<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database )
?> 

<br> <br>

<!-- tabla de productos y precios -->

<div class="container-md">
<table class="table table-striped">
    <tr>
        <td>Nombre</td>
        <td>precio</td>
        <td>Marca</td>
        <td>Cantidad</td>
    </tr>

    <?php 
    $sql = "SELECT * from producto";
    $result = mysqli_query($conn, $sql);
    
    while($mostrar= mysqli_fetch_array($result)){
    ?>    

   
    
    <tr>
        <td><?php echo $mostrar['Nombre'] ?></td>
        <td><?php echo $mostrar['Precio'] ?> </td>
        <td><?php echo $mostrar['marca'] ?> </td>
        <td><?php echo $mostrar['gramos'] ?> </td>
        
    </tr>
<?php    
}
?>
</table> 
</div> 
 <br>

 <!-- productos-->
 <div class="container-md">
 <img src="img/Chocolateb.jpg" class="rounded float-start" alt="...">
<img src="img/Chocotrn.jpg" class="rounded float-end" alt="...">
<img src="img/malva.jpg" class="rounded mx-auto d-block" alt="...">
<div class="container-md">
 
 


</body>
    


</html>