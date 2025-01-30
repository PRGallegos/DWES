<?php
session_start();
$_SESSION['pedido']['bebida'] = $_POST['bebida'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Extras</title>
</head>
<body>
    <h2>Elige los Extras</h2>
    <form action="resumen.php" method="post">
        <label><input type="checkbox" name="extras[]" value="Pan"> Pan</label>
        <label><input type="checkbox" name="extras[]" value="Mantequilla"> Mantequilla</label>
        <label><input type="checkbox" name="extras[]" value="Puro"> Puro</label><br><br>
        <button type="submit">Finalizar Pedido</button>
    </form>
</body>
</html>
