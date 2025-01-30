<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Compra de Coche</title>
</head>

<body>
    <h2>Formulario de Presupuesto</h2>
    <form action="calcularPresupuesto.php" method="post">
        <!-- Datos del coche -->
        <label>Modelo:</label>
        <input type="text" name="modelo" required><br><br>
        <label>Color:</label>
        <input type="text" name="color" required><br><br>
        <label>Tipo:</label>
        <input type="text" name="tipo" required><br><br>
        <label>¿Quieres financiar tu compra?</label>
        <input type="radio" name="financiar" value="si"> Sí
        <input type="radio" name="financiar" value="no" checked> No<br><br>
        <button type="submit">Calcular Presupuesto</button>
    </form>

    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>

</html>