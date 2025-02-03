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

// Variables to upload
$name = "cikk3"; // Replace this with your variable for name
$cikkek = "The voltage divider
Applying Ohm's and Kirchhoff's laws to notable circuits further
important laws can be established. The law of voltage division can be derived from the series connection of resistors. In this case, the resistors have the same current, while the voltage U1 and U2 occur at R1 and R2 respectively. In series connection, the voltages across each resistor are proportional to each other as the values of the resistors. The law of voltage division is the basis of a commonly used circuit in electronics called a voltage divider. A voltage divider is a four-pole. In the simplest case, it consists of two resistors in series. When a voltage is connected between points A and B of the system (the input of the quadripole), a current is generated and a voltage is applied across the resistors. According to Kirchhoff's Law II, the sum of the two voltages is always equal to the voltage of the supplying generator.

The current divider
The other notable network is the current divider, which, according to Kirchhoff's Law I, is
is derived from the parallel connection of resistors. Parallel connection means that the resistors have the same voltage (U). This results in a current flowing through one resistor I1 = U/R1 and through the other I2 = U/R2.In parallel connection, the currents are inversely proportional to the resistances of the branches. The current flowing into the node is divided by the resistances, with a smaller current flowing through the higher resistance and a larger current flowing through the lower resistance


"; // Content for cikkek column

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO eng_cikkek (name, cikkek) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $cikkek); // "ss" specifies both variables are strings

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>