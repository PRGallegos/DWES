<?php
include 'db.php';

$userId = null;
$name = "";
$email = "";

// Si se está editando un usuario, obtener sus datos
if (isset($_GET['edit'])) {
    $userId = $_GET['edit'];
    $sql = "SELECT * FROM users WHERE id=$userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $userId ? 'Edit User' : 'Add User'; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $userId ? 'Edit User' : 'Add User'; ?></h1>

        <!-- Formulario -->
        <form action="process.php" method="POST">
            <input type="hidden" name="userId" value="<?php echo $userId; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            <button type="submit" class="btn"><?php echo $userId ? 'Update User' : 'Add User'; ?></button>
        </form>

        <!-- Enlace para volver a la lista de usuarios -->
        <a href="index.php" class="btn back">Back to List</a>
    </div>
</body>
</html>