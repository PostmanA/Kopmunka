<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="hun">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legyen ön is elektromos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">FŐOLDAL</a></li>
            <li><a href="logout.php">KIJELENTKEZÉS</a></li>
            <li class="dropdown">
    <a class="dropbtn">NYELV</a>
    <div class="dropdown-content">
      <a href="eng_index.php">ENGLISH</a>
        </ul>
    </nav>
    <h1 class="mtitle">Legyen ön is elektromos</h1>
    <div class="subject-container">
        <!-- Elektrotechnika buttons -->
        <div class="subject">
            <h2>Elektrotechnika</h2>
            <a href="elektrotechnika.php" class="subject-button">
                <img src="elektro.png" alt="Elektrotechnika 1">
            </a>

        </div>

        <!-- Elektronik buttons -->
        <div class="subject">
            <h2>Elektronika</h2>
            <a href="elektronika.php" class="subject-button">
                <img src="ic.png" alt="Elektronik 1">
            </a>
        </div>

        <!-- Számítógépes rendszerek buttons -->
        <div class="subject">
            <h2>Számítógépes rendszerek</h2>
            <a href="pos.php" class="subject-button">
                <img src="pc.png" alt="Számítógépes rendszerek 1">
            </a>

        </div>
        <div class="subject">
            <h2>Játék</h2>
            <a href="game2.php" class="subject-button">
                <img src="psController.png" alt="Játék">
            </a>
        </div>
</div>
</body>
</html>

