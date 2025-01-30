<?php
session_start();

echo "<h3>Ticket de tu pedido</h3>";
echo "Primer plato: " . $_SESSION['cesta']['primer_plato'] . "<br>";
echo "Segundo plato: " . $_SESSION['cesta']['segundo_plato'] . "<br>";
echo "Bebida: " . $_SESSION['cesta']['bebida'] . "<br>";
echo "Extras: " . implode(", ", $_SESSION['cesta']['extras']) . "<br>";

$total = 0;
$precios = [
    'Sopa' => 5, 'Ensalada' => 6, 'Patatas' => 4,
    'Lasaña' => 8, 'Hamburguesa' => 7, 'Pizza' => 9,
    'Nestea' => 2, 'Lipton' => 2, 'Agua' => 1,
    'Mantequilla' => 1, 'Pan' => 1, 'Puro' => 2
];

foreach ($_SESSION['cesta'] as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $extra) {
            $total += $precios[$extra];
        }
    } else {
        $total += $precios[$value];
    }
}

echo "<br>Total: $" . $total;
?>
