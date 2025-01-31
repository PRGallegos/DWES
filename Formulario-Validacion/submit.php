<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $driver = $_POST['driver'];
    $team = $_POST['team'];

    // Initialize an array to store errors
    $errors = [];

    // Validate the driver's name (only letters and spaces allowed)
    if (!preg_match("/^[a-zA-Z ]*$/", $driver)) {
        $errors[] = "Only letters and white space allowed in the driver's name.";
    }

    // Validate the team's name (only letters and spaces allowed)
    if (!preg_match("/^[a-zA-Z ]*$/", $team)) {
        $errors[] = "Only letters and white space allowed in the team's name.";
    }

    // Check if there are any errors
    if (empty($errors)) {
        // If no errors, display success message
        echo "<div class='success'>";
        echo "<h2>Thank you for submitting your favorite F1 driver and team!</h2>";
        echo "<p><strong>Driver:</strong> " . htmlspecialchars($driver) . "</p>";
        echo "<p><strong>Team:</strong> " . htmlspecialchars($team) . "</p>";
        echo "</div>";
    } else {
        // If there are errors, display them
        echo "<div class='errors'>";
        echo "<h2>Error:</h2>";
        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>";
        }
        echo "<p><a href='index.php'>Go back to the form</a></p>";
        echo "</div>";
    }
} else {
    // If the form is not submitted, redirect to the form
    header("Location: index.php");
    exit();
}
?>