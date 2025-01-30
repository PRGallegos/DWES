<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiación Coche</title>
</head>

<body>
    <h1>Financiación del Coche</h1>

    <?php
    if (isset($_GET['precio'])) {
        $precio = $_GET['precio'];

        // Parámetros de la financiación
        // Interés anual en porcentaje
        $interes = 5;
        // Plazo en años
        $plazo = 5;
        $importe_financiado = $precio;

        // Cálculo de la cuota mensual
        // Interés mensual (5% anual)
        $interes_mensual = ($interes / 100) / 12;
        // Número total de cuotas (5 años)
        $num_cuotas = $plazo * 12;

        // Fórmula para calcular la cuota mensual (Amortización francesa)
        $cuota_mensual = ($importe_financiado * $interes_mensual) / (1 - pow(1 + $interes_mensual, -$num_cuotas));

        // Cálculo del total a pagar (cuota mensual * número de cuotas)
        $total_a_pagar = $cuota_mensual * $num_cuotas;

        echo "<p>Precio del Coche: " . number_format($precio, 2) . "€</p>";
        echo "<p>Financiación: $plazo años a un interés del $interes% anual</p>";
        echo "<p>Cuota mensual: " . number_format($cuota_mensual, 2) . "€</p>";
        echo "<p>Total a pagar al final del plazo: " . number_format($total_a_pagar, 2) . "€</p>";
    } else {
        echo "<p>No se ha recibido el precio del coche.</p>";
    }
    ?>

    <br>
    <a href="calcularPresupuesto.php">Volver al presupuesto</a>
</body>

</html>