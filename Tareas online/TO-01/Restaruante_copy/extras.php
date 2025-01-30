<?php
session_start();

if (!isset($_SESSION['cesta']['bebida'])) {
    // Si no ha seleccionado la bebida, redirige
    header('Location: bebida.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos los extras
    $_SESSION['cesta']['extras'] = isset($_POST['extra']) ? $_POST['extra'] : [];
    // Redirigir a la cesta de la compra
    header('Location: cesta.php');
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
    <h3>Selecciona tus extras</h3>
    <form method="POST">
        <label>a) Mantequilla</label>
        <input type="checkbox" name="extra[]" value="Mantequilla"><br>
        <label>b) Pan</label>
        <input type="checkbox" name="extra[]" value="Pan"><br>
        <label>c) Puro</label>
        <input type="checkbox" name="extra[]" value="Puro"><br><br>
        <input type="submit" value="Ver Cesta">
    </form>
</body>

</html>