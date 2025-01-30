<?php
session_start();
$_SESSION['pedido']['primer_plato'] = $_POST['primer_plato'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Segundo Plato</title>
</head>

<body>
    <h2>Elige el Segundo Plato</h2>
    <form action="bebida.php" method="post">
        <select name="segundo_plato">
            <option value="Pollo">Pollo</option>
            <option value="Pescado">Pescado</option>
            <option value="Carne">Carne</option>
        </select><br><br>
        <button type="submit">Siguiente</button>
    </form>
</body>

</html>