<?php
include "Funciones.php";
$iva = true;

$precio = 10;
$precio_iva = precio_con_iva($precio);


if ($iva) {
    precio_con_iva($precio);
}

print "El precio con IVA es: " . $precio_iva;
print "<br>";
hola_Mundo();
