<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password is an empty string
$dbname = "jegyzetek"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEKTROTECHNIKA</title>
    <link rel="stylesheet" href="kartyak.css">
</head>
<body>
    <header class="header1">
     <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <br>
         ELEKTROTECHNIKA
    </header>
        <div class="card-container">
            <div class="card">
            <h2>Tananyag 1:</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Voluptatum explicabo consequatur consectetur fugit molestias perferendis.</p>
        </div>
        <div class="card">
            <h2>Tananyag 2:</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Voluptatum explicabo consequatur consectetur fugit molestias perferendis, sint error iste ut, facilis sunt natus optio dolor nesciunt laboriosam obcaecati corporis numquam?</p>
        </div>
        <div class="card">
            <h2>Tananyag 3:</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum.</p>
        </div>
</body>
</html>
