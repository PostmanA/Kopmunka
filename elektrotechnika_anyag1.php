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
$sql = "SELECT cikkek FROM hun_cikkek WHERE id='1'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ohm's law</title>
    <link rel="stylesheet" href="kartya.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/bukris.david" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/bukris_dejvid/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="index2_hu.php" class="w3-bar-item w3-button">Főoldal</a>
  <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="language">Nyelv<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="eng_elektrotechnika1.php" class="w3-bar-item w3-button">English</a>
      </div>
    </div>
  <a href="logout.php" class="w3-bar-item w3-button">Kijelentkezes</a>
  <a href="elektrotechnika.php" class="w3-bar-item w3-button">Vissza</a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

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
            <img src="kep1.png">
        </div>
        <div class="img-card">
        <img src="kep2.png">
        </div>
        <div class="img-card">
        <img src="kep3.png">
</div>
</div>
    
</body>
</html>