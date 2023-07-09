<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

<h1>Login </h1>


    <form action="Login.php" method="post">
    <div class="mb-3">

        <label for="Rut">Rut:</label>
        <input type="text" name="rut" placeholder="rut sin puntos y con guión">
    </div>
    <div class="mb-3">

        <label for="Rut">Clave:</label>
        <input type="password" name="clave">
    </div>
    <div class="mb-3">

        <input type="submit" value="Ingresar">
    </div>

    </form>
</body>
</html>