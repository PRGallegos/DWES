<?php
session_start();
$_SESSION['pedido']['segundo_plato'] = $_POST['segundo_plato'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bebida</title>
</head>

<body>
    <h2>Elige una Bebida</h2>
    <form action="extras.php" method="post">
        <select name="bebida">
            <option value="Agua">Agua</option>
            <option value="Refresco">Refresco</option>
            <option value="Vino">Vino</option>
        </select><br><br>
        <button type="submit">Siguiente</button>
    </form>
</body>

</html>