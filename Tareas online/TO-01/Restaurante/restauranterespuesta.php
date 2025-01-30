<?php
// Recoger los datos del formulario
$numero = $_GET['numero'];
$nombre = $_GET['nombre'];
$primero = $_GET['primero'];
$segundo = $_GET['segundo'];
$bebida = $_GET['bebida'];
// Si hay extras, los recoge, si no, es un array vacío
$extras = isset($_GET['extra']) ? $_GET['extra'] : []; 

// Mostrar los resultados
echo "Tu número de mesa es: <br>" . $numero . "<br>";
echo "Te atiende: <br>" . $nombre . "<br>";
echo "Tu primer plato es: <br>" . $primero . "<br>";
echo "Tu segundo plato es: <br>" . $segundo . "<br>";
echo "Tu bebida es: <br>" . $bebida . "<br>";
echo "Tus extras son: <br>";
if (!empty($extras)) {
    // Si hay extras seleccionados, los muestra como una lista separada por comas
    echo implode(", ", $extras);  
} else {
    echo "Ningún extra seleccionado.";
}
?>
