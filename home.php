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
$name = "cikk6"; // Replace this with your variable for name
$cikkek = "A funkcionális áramkörök olyan digitális integrált áramkörök, amelyek egy adott feladat ellátására készültek. Közös jellemzőjük, hogy kapukból és tárolókból épülnek fel és az áramköri toknak csak a funkció ellátásához szükséges kivezetései vannak. A digitális áramkörökben ezeket alkatrészként használjuk, jellemzőik, működésüket leíró táblázataik a katalógusokban megtalálhatók.
A multiplexer adatválasztó áramkör, amely a bemenetek közül a címezéssel kiválasztottat kapcsolja a kimenetre. Négy adatbemenettel és két címbemenettel rendelkezik, ezért 4/1 (négyből egy) multiplexerként ismert.

A címbemenetek bináris cím bitjei vezérlik az ÉS kapukat, amelyek csak a megfelelő bemenethez engedélyezik a kimenetet. Az ST (Strobe) bemenet az egész áramkört engedélyezi vagy tiltja. Multiplexerek kaszkádosítással (bővítéssel) nagyobb méretű áramkörökké alakíthatók, például két 4/1 multiplexer egy 8/1 multiplexert hoz létre.

A multiplexerek adatválasztási célra, függvényrealizálásra vagy párhuzamos-soros átalakítókhoz használhatók. Egy multiplexer diszjunktív függvényt képes megvalósítani, ahol a bemenetek bináris címzéssel egy adott függvény termjeit képviselik.

A párhuzamos-soros átalakítókban a multiplexer címzési áramkör lépésenként végigcímzi az adatbemeneteket, így a kimeneten sorosan jelennek meg az adatok, az órajel ütemezésével.
A demultiplexerek a multiplexerekhez képest ellenkező jellegű funkciót látnak el: az egy vonalon érkező információt több kimenet között osztják szét. A kimenetek közül címezéssel választanak. A demultiplexerek belső felépítésének elvét egy ábra mutatja, jelképi jelölésével együtt, 1/4 demultiplexer esetén. A tényleges belső felépítés ettől eltérhet, mert másképpen történik a konkrét áramköri kialakítás TTL és másképpen a MOS áramköröknél. Bármilyen is a tényleges áramkör, a megvalósított funkció az ábrán láthatónak felel meg. A címzés áramköre megegyezik a multiplexernél megismert áramkörrel. Az adatbemenet egy engedélyezést/tiltást végző ÉS kapun keresztül kapcsolódik a kimenetre. Az engedélyezés/tiltás a G (gate – kapu) bemeneten keresztül lehetséges. Szokásos jelölése még: E (enable – engedélyezés). A felhasználás szempontjából ez a bemenet tulajdonképpen az egész tokot engedélyezi/tiltja. A kapcsolásból látszik, hogy az adatbemenet és az engedélyező bemenet felcserélhető. A katalógusok ezért jelölik.";
// Content for cikkek column

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO hun_cikkek (name, cikkek) VALUES (?, ?)");
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