<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password is an empty string
$dbname = "test"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables to upload
$name = "Sample Name"; // Replace this with your variable for name
$cikkek = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis magna odio, eu suscipit eros pretium quis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque vel eros dapibus, convallis est at, ultricies lectus. Aliquam erat volutpat. Nullam condimentum dapibus ipsum at cursus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam rutrum ante odio, nec fringilla ex fermentum nec.

Maecenas sit amet leo at turpis aliquet posuere. Cras sed dolor hendrerit, condimentum nulla vel, pulvinar metus. Ut at elit eget leo euismod semper sit amet non quam. Vivamus id congue eros, a lobortis turpis. Aenean ac turpis felis. Nulla faucibus elit ex, id laoreet lacus semper ut. Ut dui neque, vestibulum viverra convallis at, suscipit eget ante.

Vestibulum in nunc cursus, tristique mauris non, tincidunt ligula. Aenean at dictum eros. Suspendisse potenti. Cras pellentesque lectus in quam sagittis, ac vulputate lacus porta. Nunc eu lectus rhoncus, vulputate lectus vestibulum, ultrices mauris. Integer sed ligula lobortis tellus iaculis suscipit. Nunc nec aliquet diam, eu tempus dui. Quisque a purus ut ligula auctor venenatis sit amet ut magna. Nam malesuada mollis commodo. Ut tristique diam ut felis fermentum, id pharetra diam congue.

Proin ut neque ut ante vestibulum bibendum. Nam semper urna quis sem viverra, in mollis mi pulvinar. Vestibulum sed eros quam. Aenean consectetur tellus quis velit sollicitudin, et tristique lacus ultrices. Morbi vitae enim vehicula magna commodo laoreet. Sed lacinia pellentesque neque. Nunc a cursus lacus. Donec mattis leo eget pulvinar auctor. Proin vel faucibus urna, quis finibus est. Fusce volutpat felis urna, efficitur egestas turpis pharetra eget. Sed ultricies mi libero, vel bibendum magna tincidunt sollicitudin. Sed commodo, nisl vel condimentum vehicula, sem orci varius dui, non porta nibh metus eget enim. Sed rhoncus purus ac tellus viverra gravida.

Nulla nunc neque, pellentesque vel bibendum ac, tempus eu velit. Donec id laoreet tortor. Donec pharetra elementum commodo. Duis eleifend libero quam, ac accumsan mauris tincidunt id. Quisque pharetra augue et lobortis posuere. Nunc id semper tellus. Pellentesque tellus nisi, ullamcorper et quam eget, imperdiet varius dui. Nam a felis a quam tincidunt pulvinar."; // Content for cikkek column

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO test (name, cikkek) VALUES (?, ?)");
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