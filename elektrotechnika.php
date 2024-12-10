<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "comments";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $message = $_POST['message'];
    $sql = "INSERT INTO comments (username, message) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $message);
    $stmt->execute();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEKTROTECHNIKA</title>
    <link rel="stylesheet" href="kartya.css">
</head>
<body>
    <div>
    <nav>
    <ul>
        <li><a href="index.php">FŐOLDAL</a></li>
            <li><a href="logout.php">KIJELENTKEZÉS</a></li>
        <li class="dropdown">
    <a class="dropbtn">NYELV</a>
    <div class="dropdown-content">
      <a href="eng_pos.php">ENGLISH</a>
    </ul>
    </nav>
    </div>
    <div>
    <h1 class="mtitle">ELEKTROTECHNIKA</h1>
    </div>
        <div class="subject-container">
            <div class="card">
            <h2>Ohm Törvénye</h2>
            <p>Ohm német fizikus (1787-1854) az ellenállást a feszültségből és a hatására kialakuló áramerősségből határozta meg. Azt tapasztalta, hogy egy áramkörben a két mennyiség hányadosa jellemző az adott fogyasztóra és állandó érték:</p>
            <a href="elektrotechnika_anyag1.php">Tovabb...</a>
        </div>
        <div class="card">
            <h2></h2>
            <p></p>
        </div>
        <div class="card">
            <h2></h2>
            <p></p>
        </div>
        </div>
        <div class="comment-section">
        <h1 style="text-align: center">Komment szekcio</h1>
        <form action="elektrotechnika.php" method="post">
        <input type="text" name="username" placeholder="Felhasznalonev" required>
        <input type="text" name="message" placeholder="Hozzsaszolas" required>
        <input type="submit" value="Elkuldes">
    </form>
    </div>
    

    <script>
        const prohibitedWords = [
            "balfasz", "balfaszok", "balfaszokat", "balfaszt", "barmok", "barmokat", "barmot", "barom", 
            "baszik", "bazmeg", "buksza", "bukszák", "bukszákat", "bukszát", "búr", "búrok", "csöcs", 
            "csöcsök", "csöcsöket", "csöcsöt", "fasz", "faszfej", "faszfejek", "faszfejeket", "faszfejet", 
            "faszok", "faszokat", "faszt", "fing", "fingok", "fingokat", "fingot", "franc", "francok", 
            "francokat", "francot", "geci", "gecibb", "gecik", "geciket", "gecit", "kibaszott", 
            "kibaszottabb", "kúr", "kurafi", "kurafik", "kurafikat", "kurafit", "kurva", "kurvák", 
            "kurvákat", "kurvát", "leggecibb", "legkibaszottabb", "legszarabb", "marha", "marhák", 
            "marhákat", "marhát", "megdöglik", "pele", "pelék", "picsa", "picsákat", "picsát", "pina", 
            "pinák", "pinákat", "pinát", "pofa", "pofákat", "pofát", "pöcs", "pöcsök", "pöcsöket", 
            "pöcsöt", "punci", "puncik", "segg", "seggek", "seggeket", "segget", "seggfej", "seggfejek", 
            "seggfejeket", "seggfejet", "szajha", "szajhák", "szajhákat", "szajhát", "szar", "szarabb", 
            "szarik", "szarok", "szarokat", "szart","kuki"
        ];

        function checkWord() {
            const comment = document.getElementById("comment").value.trim().toLowerCase();
            const resultDiv = document.getElementById("result");

            if (Comment === "") {
                resultDiv.textContent = "Please enter a word!";
                resultDiv.className = "result";
                return;
            }

            if (prohibitedWords.includes(comment)) {
                resultDiv.textContent = `"${comment}" is in the prohibited list!`;
                resultDiv.className = "FALSE";
            } else {
                resultDiv.textContent = `"${comment}" is not in the prohibited list.`;
                resultDiv.className = "TRUE";


            }
        }
    
    </script>
</body>
</html>
