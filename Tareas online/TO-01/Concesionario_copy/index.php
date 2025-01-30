<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');  // Redirige al login si no está logueado
    exit();
}

// Si el formulario fue enviado, procesa los datos y muestra el presupuesto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $tipo = $_POST['tipo'];
    $puertas = $_POST['puertas'];
    $cv = $_POST['cv'];
    $motor = $_POST['motor'];
    $financiacion = $_POST['financiacion'];

    // Cálculos básicos según el modelo y características
// Precio base por defecto
    $precio_base = 10000;
    // Ejemplo de cálculo simple
    $precio_final = $precio_base + ($puertas * 500) + ($cv * 100);

    if ($motor == 'diesel') {
        $precio_final += 1500;
    } elseif ($motor == 'gasolina') {
        $precio_final += 1000;
    } elseif ($motor == 'electrico') {
        $precio_final += 5000;
    } elseif ($motor == 'hibrido') {
        $precio_final += 3000;
    }

    // Guardar el precio en la sesión para usarlo en la financiación
    $_SESSION['precio_final'] = $precio_final;
    $_SESSION['modelo'] = $modelo;
    $_SESSION['color'] = $color;
    $_SESSION['tipo'] = $tipo;
    $_SESSION['puertas'] = $puertas;
    $_SESSION['cv'] = $cv;
    $_SESSION['motor'] = $motor;

    // Mostrar el presupuesto
    echo "<h2>Presupuesto del Coche</h2>";
    echo "<p>Modelo: $modelo</p>";
    echo "<p>Color: $color</p>";
    echo "<p>Tipo: $tipo</p>";
    echo "<p>Puertas: $puertas</p>";
    echo "<p>CV: $cv</p>";
    echo "<p>Tipo de Motor: $motor</p>";
    echo "<p>Precio Base: 10000€</p>";
    echo "<p>Precio Final: " . $precio_final . "€</p>";

    // Si se elige financiación, redirige a la página de financiación
    if ($financiacion == 'si') {
        echo "<p><a href='finanPresupuesto.php'>Calcular Financiación</a></p>";
    }
} else {
    // Si no se ha enviado el formulario, muestra el formulario
    ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Presupuesto Coche</title>
    </head>

    <body>
        <h1>Presupuesto del Coche</h1>
        <form action="index.php" method="POST">
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required><br><br>

            <label for="color">Color:</label>
            <input type="text" name="color" id="color" required><br><br>

            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" id="tipo" required><br><br>

            <label for="puertas">Puertas:</label>
            <input type="number" name="puertas" id="puertas" required><br><br>

            <label for="cv">CV:</label>
            <input type="number" name="cv" id="cv" required><br><br>

            <label for="motor">Tipo de Motor:</label>
            <select name="motor" id="motor" required>
                <option value="diesel">Diesel</option>
                <option value="gasolina">Gasolina</option>
                <option value="electrico">Eléctrico</option>
                <option value="hibrido">Híbrido</option>
            </select><br><br>

            <label for="financiacion">¿Quieres financiar tu compra?</label>
            <select name="financiacion" id="financiacion" required>
                <option value="no">No</option>
                <option value="si">Sí</option>
            </select><br><br>

            <input type="submit" value="Calcular Presupuesto">
        </form>
    </body>

    </html>

    <?php
}
?>