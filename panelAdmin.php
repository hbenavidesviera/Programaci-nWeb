<?php
//Iniciamos la session
session_start();

// Validar el inicio de sesión
if (!isset($_SESSION['rut'])) {
    // Redirigir al formulario de inicio de sesión si no hay sesión activa
    header('Location: accesoAdmin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body style="background-image: linear-gradient(45deg, #FFFFFF, rgb(255, 122, 89));}">

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

<?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database );
$rut = $_SESSION['rut'];

$sql = "SELECT nombre from usuario Where rut='$rut'";
$result = mysqli_query($conn, $sql);
$mostrar= mysqli_fetch_array($result);

?> 




<div class="container-md">
    <h1>Bienvenido <?php echo $mostrar['nombre'] ?> </h1>
    <?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database );
$rut = $_SESSION['rut'];
$sql2 = "SELECT idPerfil from usuario where rut='$rut'";
$result2 = mysqli_query($conn, $sql2);
$mostrar2 = mysqli_fetch_array($result2);
$tipousuario = $mostrar2['idPerfil'];
$sql3 = "SELECT descripcion from perfil where idPerfil='$tipousuario'";
$result3 = mysqli_query($conn, $sql3);
$mostrar3 = mysqli_fetch_array($result3)

?>
    <p>Usted es un <?php echo $mostrar3['descripcion'] ?></p>
</div>
 <?php
$serverName = "localhost";
$user = "root";
$password = "root";
$database = "tiendamm";
$conn = mysqli_connect($serverName, $user, $password, $database )
?> 
<div class="container-md">
<table class="table table-striped">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>precio</td>
        <td>Marca</td>
        <td>Cantidad</td>
        <td></td>
        <td></td>
    </tr>

    <?php 
    $sql = "SELECT * from producto";
    $result = mysqli_query($conn, $sql);
    
    while($mostrar= mysqli_fetch_array($result)){
    ?>    

   
    
    <tr>
        <td><?= $mostrar['IdProducto'] ?></td>
        <td><?php echo $mostrar['Nombre'] ?></td>
        <td><?php echo $mostrar['Precio'] ?> </td>
        <td><?php echo $mostrar['marca'] ?> </td>
        <td><?php echo $mostrar['gramos'] ?> </td>
        <td><a href="update.php?id=<?= $mostrar['IdProducto']?>">editar</a></td>
        <td><a href="eliminar.php?id=<?= $mostrar['IdProducto']?>">eliminar</a></td>
        
    </tr>
<?php    
}
?>
</table> 
</div> 
<div class="container-md">
        <form action="crear.php" method="POST">
            <h1>Agregar producto</h1>
            <div class="mb-3">
            <input type="text" name="Nombre" placeholder="nombre" >
            <input type="text" name="Precio" placeholder="precio" >
            <input type="text" name="marca" placeholder="marca" >
            <input type="text" name="gramos" placeholder="cantidad">
            <input type="submit" value="crear">
            </div>

        </form>

    </div>


</body>

</html>