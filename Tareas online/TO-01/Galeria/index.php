<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería Fotográfica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }
        .gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        .upload-form {
            margin-bottom: 20px;
        }
        .upload-form input[type="file"] {
            padding: 5px;
        }
    </style>
</head>
<body>

<h1>Galería Fotográfica</h1>

<!-- Formulario para subir una imagen -->
<div class="upload-form">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="image">Selecciona una imagen para subir:</label>
        <input type="file" name="image" id="image" required>
        <input type="submit" value="Subir Imagen">
    </form>
</div>

<?php
// Directorio donde se almacenarán las imágenes subidas
$upload_dir = 'uploads/';

// Verifica si se envió una imagen
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $image = $_FILES['image'];

    // Verifica si la imagen es válida
    $valid_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

    if (in_array($extension, $valid_extensions)) {
        $target_file = $upload_dir . basename($image['name']);
        
        // Verifica si la imagen ya existe
        if (!file_exists($target_file)) {
            // Intenta mover la imagen a la carpeta 'uploads'
            if (move_uploaded_file($image['tmp_name'], $target_file)) {
                echo "<p>¡Imagen subida exitosamente!</p>";
            } else {
                echo "<p>Error al subir la imagen.</p>";
            }
        } else {
            echo "<p>La imagen ya existe. Por favor, elige otro archivo.</p>";
        }
    } else {
        echo "<p>Archivo no válido. Solo se permiten imágenes JPG, JPEG, PNG y GIF.</p>";
    }
}

// Mostrar la galería de imágenes
if (is_dir($upload_dir)) {
    $images = array_diff(scandir($upload_dir), array('..', '.'));
    if (count($images) > 0) {
        echo "<div class='gallery'>";
        foreach ($images as $image) {
            echo "<div class='image'><img src='$upload_dir/$image' alt='$image'></div>";
        }
        echo "</div>";
    } else {
        echo "<p>No hay imágenes en la galería aún.</p>";
    }
}
?>

</body>
</html>
