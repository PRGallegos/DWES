<?php
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$tipo = $_POST['tipo'];
$puertas = $_POST['puertas'];
$cv = $_POST['cv'];
$motor = $_POST['motor'];
$financiar = $_POST['financiar'];

$precio_base = 20000 + ($cv * 100);

echo "<h2>Presupuesto del Coche</h2>";
echo "<p>Modelo: $modelo</p>";
echo "<p>Color: $color</p>";
echo "<p>Tipo: $tipo</p>";
echo "<p>Puertas: $puertas</p>";
echo "<p>Motor: $motor</p>";
echo "<p>Precio Base: $precio_base €</p>";

if ($financiar === "si") {
    header("Location: presupuesto.php?precio=$precio_base");
    exit;
} else {
    echo "<p>Total sin financiar: $precio_base €</p>";
}
