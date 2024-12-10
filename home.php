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
$cikkek = "Ohm német fizikus (1787-1854) az ellenállást a feszültségből és a hatására kialakuló áramerősségből határozta meg. Azt tapasztalta, hogy egy áramkörben a két mennyiség hányadosa jellemző az adott fogyasztóra és állandó érték:
Az összefüggés átrendezésével a törvény más alakban is felírható:
A második összefüggés tartalma szavakban: egy ellenálláson áram folyik, ha rajta feszültség van. Az ellenállás árama egyenesen arányos a rajta lévő feszültséggel, és fordítottan arányos az ellenállás értékével. Hasonlóan a harmadik képlet: ha egy R ellenálláson I áramerősség folyik, akkor rajta U = I · R feszültségnek kell lenni, vagyis a rajta mérhető feszültség egyenesen arányos az ellenállásával és az áramával. Jegyezzük meg, hogy U, I és R összetartozó mennyiségek, vagyis az Ohm törvény egy adott R ellenálláshoz tartozó áramerősség és feszültség kapcsolatát fejezi ki! Az I=U/R összefüggés értelmében egy áramkörben nagy az áramerősség, ha a fogyasztó ellenállása kicsi. Az ellenállást csökkentve olyan nagy áram alakul ki, hogy a generátor vagy az összekötő vezeték károsodik. A túláram ellen a rendszert biztosítóval védjük, melyet az áramkörben a fogyasztóval sorba kapcsolunk. A biztosító olyan alkatrész, amely a rá jellemző áramerősségnél az áramkört automatikusan megszakítja. R=0 esetén nincs fogyasztó az áramkörben, és ekkor 1 = ∞, Ezt nevezzük rövidzárnak, mert a generátor által szétválasztott töltések akadálytalanul és közvetlenül a generátor kapcsai között egyenlítődnek ki. A gyakorlatban minden anyagnak van ellenállása, ezért az áramerősség sohasem lehet végtelen, legfeljebb rendkívül nagy, vagyis ideális rövidzár nincs. A végtelen nagy ellenállás (szakadás) sem fogyasztó, mert ekkor nem folyik áram (I = 0), így nincs energia átalakulás sem. Rövidesen látni fogjuk, hogy az Ohm törvény az elektronikában csak megkötésekkel érvényes, mert nagyon sok alkatrész ellenállása függ a feszültségtől, illetve a rajta átfolyó áramtól, másrészt vannak olyan alkatrészek is (kondenzátor és induktivitás), amelyekben az Ohm törvény ugyan érvényes, de az áramkorlátozó hatást nem a töltéshordozónak a közeg atomjaival történő ütközése (rezisztencia), hanem más kölcsönhatás határozza meg (1. később). A rezisztenciának, vagyis R-nek a másik neve ezért ohmos ellenállás. Csak ez képes a villamos energiát, mint fogyasztó, más hasznosítható energiává alakítani.
"; // Content for cikkek column

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