<?php
function precio_con_iva($precio)
{
    return $precio * 1.21;
}

function hola_Mundo()
{
    print("Hola mundo");
}


function suma($suma1, $suma2)
{
    print("El resultado de la suma es: " .  ($suma1 + $suma2));
}

function resta($resta1, $resta2)
{
    print("El resultado de la resta es: " .  ($resta1 - $resta2));
}

function multiplicacion($mult1, $mult2)
{
    print("El resultado de la multiplicacion es: " . ($mult1 * $mult2));
}

function division($div1, $div2)
{
    if ($div2 != 0) {
        print("El resultado de la division es: " .  ($div1 / $div2));
    } else {
        print("No se puede dividir por 0");
    }
}

function esPrimo($num)
{
    $primo = true;
    if ($num <= 1) {
        print("Los números menores o iguales que 1 no son primos");
    }

    // Revisar si es divisible por algún número entre 2 y la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($num) && $primo != false; $i++) {
        if ($num % $i == 0) {
            $primo = false; // Si es divisible por algún número, no es primo
        }
    }
    if ($primo) {
        print("El número " . $num . " es primo");
    } else {
        print("El número " . $num . " no es primo");
    }
}
