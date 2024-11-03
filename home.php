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
$name = "cikk2"; // Replace this with your variable for name
$cikkek = "Területi kiterjedés alapján
• WAN - a legnagyobbak a nagykiterjedésű (esetenként akár világméretű)
hálózatok. Ezeket WAN-oknak (Wide Area Network) nevezzük és azért fontosak,
mert a jelenleg robbanásszerűen terjedő Internet hálózat használatához
nyújtanak alapokat.
• MAN - ez alatt helyezkednek el a városi, nagyobb területre kiterjedő MAN-ok
(Metropolitan Area Network).
• LAN - a harmadik szint a helyi hálózatok (LAN -Local Area Network). Ezek
általában egy intézményhez kapcsolódnak, segítve az intézmény szervezettségét,
az intézmény hatékony működéséhez szükséges intézményen belüli
kommunikációt. Főbb jellemzői: földrajzilag korlátozott nagyságú területen
működnek, nagy sávszélességű átviteli közeget biztosítanak sok felhasználó
számára, napi 24 órás hozzáférést biztosítanak a helyi szolgáltatásokhoz,
fizikailag egymáshoz közel lévő eszközöket kötnek össze."; // Content for cikkek column

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO cikkek (name, cikkek) VALUES (?, ?)");
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