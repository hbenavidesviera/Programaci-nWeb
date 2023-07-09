<?php
//Iniciamos la session
session_start();

// Validar el inicio de sesión
if (!isset($_SESSION['rut'])) {
    // Redirigir al formulario de inicio de sesión si no hay sesión activa
    header('Location: index.php');
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
    <h1>Bienvenido, <?php echo $_SESSION['rut']; ?>!</h1>
    <p>Esta es una página protegida que solo puede ser accedida después de iniciar sesión.</p>
</body>

</html>