<?php
session_start();

if (!isset($_SESSION['cesta']['segundo_plato'])) {
    // Si no ha seleccionado el segundo plato, redirige
    header('Location: segundo_plato.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos la bebida
    $_SESSION['cesta']['bebida'] = $_POST['bebida'];
    // Redirigir a la selección de extras
    header('Location: extras.php');
    exit;
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
    <h3>Selecciona tu bebida</h3>
    <form method="POST">
        <label>a) Nestea</label>
        <input type="radio" name="bebida" value="Nestea" required><br>
        <label>b) Lipton</label>
        <input type="radio" name="bebida" value="Lipton"><br>
        <label>c) Agua</label>
        <input type="radio" name="bebida" value="Agua"><br><br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>