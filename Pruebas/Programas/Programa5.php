<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación Acceso</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Definir usuario y contraseña correctos
    $usuario_correcto = "usuario";
    $contraseña_correcta = "1234";

    // Comprobar si se han enviado los datos del formulario
    if (isset($_POST['enviar'])) {
        // Capturar datos del formulario
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        // Verificar si los datos coinciden con los predefinidos
        if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
            echo "<h1>Has conseguido entrar</h1>";
        } else {
            echo "<h1>Nombre de usuario o contraseña incorrectos</h1>";
        }
    } else {
    ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Nombre de usuario: <input type="text" name="usuario" required></p>
            <p>Contraseña: <input type="password" name="contraseña" required></p>
            <input type="submit" name="enviar" value="Enviar">
        </form>

    <?php
    }
    ?>
</body>

</html>