<?php
session_start();
$_SESSION['pedido']['extras'] = isset($_POST['extras']) ? $_POST['extras'] : [];

$ticket = $_SESSION['pedido'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resumen del Pedido</title>
</head>

<body>
    <h2>Resumen del Pedido</h2>
    <p>Mesa: <?php echo $ticket['mesa']; ?></p>
    <p>Camarero: <?php echo $ticket['camarero']; ?></p>
    <p>Primer Plato: <?php echo $ticket['primer_plato']; ?></p>
    <p>Segundo Plato: <?php echo $ticket['segundo_plato']; ?></p>
    <p>Bebida: <?php echo $ticket['bebida']; ?></p>

    <h3>Extras:</h3>
    <?php
    if (!empty($ticket['extras'])) {
        echo "<ul>";
        foreach ($ticket['extras'] as $extra) {
            echo "<li>$extra</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Sin extras</p>";
    }
    ?>

    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>

</html>