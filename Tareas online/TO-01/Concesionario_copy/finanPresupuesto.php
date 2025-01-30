<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');  // Redirige al login si no está logueado
    exit();
}

if (isset($_SESSION['precio_final'])) {
    $precio = $_SESSION['precio_final'];

    // Parámetros de la financiación
    // Interés anual
    $interes = 5;
    // Plazo en años
    $plazo = 5;
    $importe_financiado = $precio;

    // Cálculo de la cuota mensual
    // Interés mensual
    $interes_mensual = ($interes / 100) / 12;
    // Total de cuotas

    $num_cuotas = $plazo * 12;
    // Fórmula para calcular la cuota mensual
    $cuota_mensual = ($importe_financiado * $interes_mensual) / (1 - pow(1 + $interes_mensual, -$num_cuotas));

    // Cálculo del total a pagar
    $total_a_pagar = $cuota_mensual * $num_cuotas;

    // Mostrar el cálculo
    echo "<p>Precio del Coche: " . number_format($precio, 2) . "€</p>";
    echo "<p>Financiación: $plazo años a un interés del $interes% anual</p>";
    echo "<p>Cuota mensual: " . number_format($cuota_mensual, 2) . "€</p>";
    echo "<p>Total a pagar al final del plazo: " . number_format($total_a_pagar, 2) . "€</p>";
} else {
    echo "<p>No se ha recibido el precio del coche.</p>";
}
?>

<br>
<a href="index.php">Volver al presupuesto</a>