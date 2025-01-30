<?php
// Verificar si hay número
if (isset($_POST["numero"])) {
    $numero = intval($_POST["numero"]);

    // Pa verificar si es primo
    function esPrimo($num)
    {
        if ($num <= 1) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Resultado
    if (esPrimo($numero)) {
        echo "El número " . $numero . " es primo.";
    } else {
        echo "El número " . $numero . " no es primo.";
    }
} else {
    echo "No se ha introducido ningún número.";
}
?>

<!-- Para volver atrás -->
<br>
<a href="index.html">Volver</a>