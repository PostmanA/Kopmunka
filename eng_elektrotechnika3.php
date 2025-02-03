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

// SQL query to select all records from the jegyzetek table
$sql = "SELECT cikkek FROM eng_cikkek WHERE id='3'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notable passive electrical networks</title>
    <link rel="stylesheet" href="kartya.css">
</head>
<body>
    <div>
    <nav>
    <ul>
        <li><a href="index.php">HOME</a></li>
            <li><a href="logout.php">LOG  OUT</a></li>
        <li class="dropdown">
    <a class="dropbtn">LANGUAGE</a>
    <div class="dropdown-content">
      <a href="elektrotechnika_anyag3.php">MAGYAR</a>
    </ul>
    </nav>
    </div>
        <div class="subject-container">
            <div class="card" style="width:70%">
            <?php if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["cikkek"] . "</p>";
         }
        }
        $conn->close();
    ?>
    </div>
    </div>
    <div class="img-container">
        <div class="img-card">
            <img src="kep7.png">
        </div>
        <div class="img-card">
        <img src="kep8.png">
        </div>
        <div class="img-card">
            <img src="kep9.png">
        </div>
        <div class="img-card">
        <img src="kep10.png">
        </div>
</div>
</div>
    
</body>
</html>