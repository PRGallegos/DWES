<?php
session_start();
$_SESSION['pedido']['mesa'] = $_POST['mesa'];
$_SESSION['pedido']['camarero'] = $_POST['camarero'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Primer Plato</title>
</head>

<body>
    <h2>Elige el Primer Plato</h2>
    <form action="segundo_plato.php" method="post">
        <select name="primer_plato">
            <option value="Sopa">Sopa</option>
            <option value="Ensalada">Ensalada</option>
            <option value="Pasta">Pasta</option>
        </select><br><br>
        <button type="submit">Siguiente</button>
    </form>
</body>

</html>