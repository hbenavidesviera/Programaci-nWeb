<?php
//Iniciamos la session
session_start();

// Validar el inicio de sesión
if (!isset($_SESSION['rut'])) {
    // Redirigir al formulario de inicio de sesión si no hay sesión activa
    header('Location: acceso.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>

<body>
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
          <a class="nav-link" href="Login.php">Login</a>
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
</body>

</html>