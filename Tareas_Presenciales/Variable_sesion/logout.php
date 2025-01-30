<?php
session_start();
session_destroy(); // Destruir la sesión
header("Location: formulario.php"); // Redirigir al formulario
exit();
