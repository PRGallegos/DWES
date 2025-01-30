<?php
session_start();

if (!isset($_SESSION['numero']) || !isset($_SESSION['nombre'])) {

    header('Location: index.php');  // Si no se han registrado, redirigir a inicio
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos el primer plato
    $_SESSION['cesta']['primer_plato'] = $_POST['primero'];
    // Redirigir a la siguiente selección
    header('Location: segundo_plato.php');
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
    <h3>Selecciona tu primer plato</h3>
    <form method="POST">
        <label>a) Sopa</label>
        <input type="radio" name="primero" value="Sopa" required><br>
        <label>b) Ensalada</label>
        <input type="radio" name="primero" value="Ensalada"><br>
        <label>c) Patatas</label>
        <input type="radio" name="primero" value="Patatas"><br><br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>