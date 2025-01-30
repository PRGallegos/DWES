<?php
session_start();
$_SESSION['pedido'] = []; // Inicializar pedido vacío
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Restaurante</title>
</head>
<body>
    <h2>Información de la Mesa</h2>
    <form action="primer_plato.php" method="post">
        <label>Número de Mesa:</label>
        <input type="number" name="mesa" required><br><br>
        <label>Nombre del Camarero:</label>
        <input type="text" name="camarero" required><br><br>
        <button type="submit">Iniciar Pedido</button>
    </form>
</body>
</html>
