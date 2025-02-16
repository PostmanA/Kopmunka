<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ohm's law</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1, h2, h3, h4, h5, h6 { font-family: "Oswald"; }
        body { font-family: "Open Sans"; background-color: #f5f5f5; }

        /* Center the subject container */
        .subject-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* Card styling */
        .card {
            width: 70%;
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: justify;
        }

        /* Image container - matches the width of the text container */
        .img-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }

        /* Image card - bigger images */
        .img-card {
            flex: 1; /* All images take equal space */
            background: white;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-card img {
            width: 100%; /* Make the images fully stretch */
            height: auto; /* Maintain aspect ratio */
            border-radius: 6px;
        }
    </style>
</head>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/bukris.david" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/bukris_dejvid/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="index_hu.php" class="w3-bar-item w3-button">Főoldal</a>
  <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button">Nyelv<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="eng_elektronika3.php" class="w3-bar-item w3-button">English</a>
      </div>
    </div>
  <a href="logout.php" class="w3-bar-item w3-button">Kijelentkezes</a>
  <a href="elektronika.php" class="w3-bar-item w3-button">Vissza</a>
</div>

<!-- Main Content -->
<div class="w3-content" style="max-width:1600px">
    <div class="subject-container">
        <div class="card">
            <?php
            // Database configuration
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "jegyzetek";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to select content
            $sql = "SELECT cikkek FROM hun_cikkek WHERE id='6'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<p>" . $row["cikkek"] . "</p>";
                }
            }
            $conn->close();
            ?>
        </div>
    </div>

    <!-- Image Section -->
    <div class="img-container">
        <div class="img-card">
            <img src="kep13.png" alt="Ohm's Law Diagram 1">
        </div>
        <div class="img-card">
            <img src="kep14.png" alt="Ohm's Law Diagram 1">
        </div>
    </div>
</div>

</body>
</html>
