<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // No password for localhost
$database = "oduor";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize session
session_start();

// Validate user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["email"];
    $password = $_POST["password"];

    // Prepare SQL statement to fetch user from database
    $sql = "SELECT * FROM people WHERE email = '$name' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, redirect to index.php
        header("Location: index.php");
        exit;
    } else {
        // Invalid login credentials
        $_SESSION["error"] = "Login failed. Invalid name or password.";
        header("Location: login.php");
        exit;
    }
}

// Close connection
$conn->close();
?>
