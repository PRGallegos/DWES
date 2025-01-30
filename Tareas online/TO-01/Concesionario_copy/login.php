<?php
session_start();

if (isset($_SESSION['usuario'])) {
    // Redirige al presupuesto si ya está logueado
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datos del formulario de login
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Validar las credenciales
    // Para ejemplo, usuario y contraseña están "hardcodeados"
    if ($usuario === 'usuario' && $password === 'contraseña') {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
        exit();
    } else {
        $error = 'Usuario o contraseña incorrectos';
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Iniciar sesión</h1>
    <?php if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    } ?>
    <form action="login.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>
</body>

</html>