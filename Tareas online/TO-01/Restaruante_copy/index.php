<?php
session_start();

// Verificamos si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Almacenamos los datos del formulario en la sesión
    $_SESSION['numero'] = $_POST['numero'];
    $_SESSION['nombre'] = $_POST['nombre'];
    // Inicializamos la cesta vacía
    $_SESSION['cesta'] = [];

    // Redirigimos a la página del primer plato
    header('Location: primer_plato.php');
    // Importante para asegurarnos que no se ejecute código adicional
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>

<body>
    <h3>Registro del Restaurante</h3>
    <form method="POST" action="index.php">
        <label>Número de la mesa:</label><br>
        <input type="text" name="numero" required><br>
        <label>Nombre del camarero:</label><br>
        <input type="text" name="nombre" required><br>
        <input type="submit" value="Iniciar Pedido"><br>
    </form>
</body>

</html>