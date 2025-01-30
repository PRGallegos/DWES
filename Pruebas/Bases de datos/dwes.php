<link href="dwes.css" rel="stylesheet" type="text/css">

<?php
$dwes = new mysqli(hostname: 'localhost', username: 'dwes', password: 'abc123.', database: 'dwes');

$error = $dwes->connect_errno;

if ($error != null) {
    echo "<p>Error $error conectando a la base de datos: {$dwes->connect_error}</p>";
    exit();
}

$resultado = $dwes->query(query: 'SELECT * FROM stock WHERE tienda = 3');

echo "<table border='1' cellpadding='0' cellspacing='0' style='border-collapse: collapse; width: 80%; margin: auto;'>";
echo "<thead>";
echo "<tr style='background-color: #f2f2f2; text-align: center;'>";
echo "<th>Producto</th>";
echo "<th>Tienda</th>";
echo "<th>Unidades</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$stock = $resultado->fetch_object();
while ($stock != null) {
    echo "<tr>";
    echo "<td>{$stock->producto}</td>";
    echo "<td>{$stock->tienda}</td>";
    echo "<td>{$stock->unidades}</td>";
    echo "</tr>";
    $stock = $resultado->fetch_object();
}

echo "</tbody>";
echo "</table>";
