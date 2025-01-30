<?php
print_r($_SERVER);
print("<br>");
print("<br>");


foreach ($_SERVER as $clave => $value) {
    echo "{$clave} => {$value} <br>";
}
