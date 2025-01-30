<?php
session_start();

if (!isset($_SESSION['cesta']['primer_plato'])) {
    // Si no ha seleccionado el primer plato, redirige
    header('Location: primer_plato.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos el segundo plato
    $_SESSION['cesta']['segundo_plato'] = $_POST['segundo'];
    // Redirigir a la selección de bebida
    header('Location: bebida.php');
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
    <h3>Selecciona tu segundo plato</h3>
    <form method="POST">
        <label>a) Lasaña</label>
        <input type="radio" name="segundo" value="Lasaña" required><br>
        <label>b) Hamburguesa</label>
        <input type="radio" name="segundo" value="Hamburguesa"><br>
        <label>c) Pizza</label>
        <input type="radio" name="segundo" value="Pizza"><br><br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>