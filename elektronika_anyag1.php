<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>

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
$sql = "SELECT cikkek FROM cikkek WHERE id='1'";
$result = $conn->query($sql);

// Check if any records were returned and display them
if ($result->num_rows > 0) {
    // Output each row's data
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>Halozati Kapcsolat</strong> " . $row["cikkek"] . "</p>";
        echo "<hr>"; // Separator for each record
    }
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
