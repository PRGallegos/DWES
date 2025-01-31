<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite F1 Driver and Team</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Favorite F1 Driver and Team</h1>
    <form action="submit.php" method="post">
        <label for="driver">Favorite F1 Driver:</label>
        <input type="text" id="driver" name="driver" required>
        <br><br>
        <label for="team">Favorite F1 Team:</label>
        <input type="text" id="team" name="team" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>