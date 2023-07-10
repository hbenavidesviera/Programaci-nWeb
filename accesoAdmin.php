<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Login</title>
</head>


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
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-md">
<body>
<h1>Login </h1>


    <form action="LoginAdmin.php" method="post">
    <div class="mb-3">

        <label for="Rut" class="form-label">Rut:</label>
        <input type="text" class="form-control" name="rut" placeholder="rut sin puntos y con guión">
    </div>
    <div class="mb-3">

        <label for="Rut" class="form-label">Clave:</label>
        <input type="password"  class="form-control" name="clave">
    </div>
    <div class="mb-3">

        <input type="submit" value="Ingresar">
    </div>

    </form>
</div>
</body>
</html>