<?php
include("Funciones.php");
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

if ($_POST["calculadora"] == "suma") {
    suma($_POST["n1"], $_POST["n2"]);
}

if ($_POST["calculadora"] == "resta") {
    resta($_POST["n1"], $_POST["n2"]);
}

if ($_POST["calculadora"] == "multiplicacion") {
    multiplicacion($_POST["n1"], $_POST["n2"]);
}

if ($_POST["calculadora"] == "division") {
    division($_POST["n1"], $_POST["n2"]);
}

if ($_POST["calculadora"] == "N/A") {
    print "No se realiza operacion";
}
