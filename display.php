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
$sql = "SELECT id, name, cikkek FROM cikkek";
$result = $conn->query($sql);

// Check if any records were returned and display them
if ($result->num_rows > 0) {
    // Output each row's data
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
        echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>Cikkek:</strong> " . $row["cikkek"] . "</p>";
        echo "<hr>"; // Separator for each record
    }
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
