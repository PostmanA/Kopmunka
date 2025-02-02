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
    <title>ELECTROTECHNICS</title>
    <link rel="stylesheet" href="kartya.css">
</head>
<body>
    <div>
    <nav>
    <ul>
        <li><a href="index.php">HOME</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        <li class="dropdown">
    <a class="dropbtn">LANGUAGE</a>
    <div class="dropdown-content">
      <a href="elektrotechnika.php">MAGYAR</a>
    </ul>
    </nav>
    </div>
    <div>
    <h1 class="mtitle">ELECTROTECHNICS</h1>
    </div>
        <div class="subject-container">
            <div class="card">
            <h2>Ohm's law</h2>
            <p>The German physicist Ohm (1787-1854) defined resistance as the voltage and the current it produces. He found that in a circuit, the ratio of the two quantities is characteristic of a given load and is a constant value:
            </p>
            <a href="eng_elektrotechnika1.php">Read more...</a>
        </div>
        <div class="card">
            <h2>Kirchhoff's laws</h2>
            <p>For any element of an arbitrarily complex network, you can individually apply the
Ohm's law, which is known for simple circuits, since it is the law of the connected U, I and R
quantities. In a system with several elements, the
Kirchhoff's laws are helpful.</p>
        </div>
        <a href="eng_elektrotechnika2.php">Read more...</a>
        <div class="card">
            <h2>Notable passive electrical networks</h2>
            <p>The voltage divider
Applying Ohm's and Kirchhoff's laws to notable circuits further
important laws can be established. The law of voltage division can be derived from the series connection of resistors.</p>
<a href="eng_elektrotechnika3.php">Read more...</a>
        </div>
        </div>
        <div class="comment-section">
        <h1 style="text-align: center">Comment section</h1>
        <form action="eng_elektrotechnika.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="message" placeholder="Comment" required>
        <input type="submit" value="Send">
    </form>
    </div>
    

    <script>
        const prohibitedWords = [
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
