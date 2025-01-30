<?php
session_start();

// Verificamos que la cesta tenga datos
if (!isset($_SESSION['cesta']['primer_plato'])) {
    header('Location: index.php');
    exit;
}

// Definimos precios de los platos y bebidas
$precios = [
    'Sopa' => 5,
    'Ensalada' => 6,
    'Patatas' => 4,
    'Lasaña' => 8,
    'Hamburguesa' => 7,
    'Pizza' => 9,
    'Nestea' => 2,
    'Lipton' => 2,
    'Agua' => 1,
    'Mantequilla' => 1,
    'Pan' => 1,
    'Puro' => 2
];

// Calculamos el total de la cesta
$total = 0;
$cesta = $_SESSION['cesta'];

foreach ($cesta as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $extra) {
            $total += $precios[$extra];
        }
    } else {
        $total += $precios[$value];
    }
}

// Mostramos el resumen de la cesta
echo "<h3>Resumen de tu pedido</h3>";
echo "Primer plato: " . $cesta['primer_plato'] . "<br>";
echo "Segundo plato: " . $cesta['segundo_plato'] . "<br>";
echo "Bebida: " . $cesta['bebida'] . "<br>";
echo "Extras: " . implode(", ", $cesta['extras']) . "<br>";
echo "<br>Total: $" . $total;
?>

<a href="finalizar.php">Finalizar pedido</a>
