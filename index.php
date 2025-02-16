<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login2.php");
    exit;
}

// Database connection for comments (usercomments database)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usercomments";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comment"]) && isset($_POST["section"])) {
    $comment = trim($_POST["comment"]);
    $section = trim($_POST["section"]);
    if (!empty($comment) && !empty($section)) {
        $stmt = $conn->prepare("INSERT INTO comments (username, comment, section) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $_SESSION["username"], $comment, $section);
        $stmt->execute();
        $stmt->close();
        
        // Refresh the page to show the new comment
        header("Location: index.php");
        exit;
    }
}

// --------------------------------------------------------------------------
// New Database Connection for High Scores from "felhasznalok" database
$scoreServer = "localhost";
$scoreUser   = "root";
$scorePass   = "";
$scoreDB     = "felhasznalok";

$connScores = new mysqli($scoreServer, $scoreUser, $scorePass, $scoreDB);
if ($connScores->connect_error) {
    die("Connection failed: " . $connScores->connect_error);
}

// Query the scores table for high scores
$scoreQuery  = "SELECT username, score FROM scores ORDER BY score DESC";
$scoreResult = $connScores->query($scoreQuery);
?>
<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3.CSS and Font styles -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
  body {font-family: "Open Sans"}
  
  /* Modal overlay styles */
  .modal {
    display: none; 
    position: fixed; 
    z-index: 1000; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgba(0,0,0,0.4); 
  }
  
  .modal-content {
    background-color: #fefefe;
    margin: 10% auto; 
    padding: 20px;
    border: 1px solid #888;
    width: 80%; 
  }
  
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
  
  /* High score table styles */
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
</style>
</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/bukris.david" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/bukris_dejvid/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="language">Language <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="index_hu.php" class="w3-bar-item w3-button">Magyar</a>
      </div>
    </div>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  <a href="reset-password.php" class="w3-bar-item w3-button">Reset Password</a>
  <b class="w3-bar-item">Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></b>
</div>
  
<!-- w3-content defines a container for fixed size centered content -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>Become an electrician</b></h1>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
      <!-- Blog entry: ELEKTROTECHNICS -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>ELECTROTECHNICS</h3>
        </div>
        <div class="w3-justify">
          <p>
            Electrical engineering is a scientific and technical discipline that deals with the technical applications of electromagnetism, including the generation, distribution and conversion of electrical energy into other forms of energy, the construction of communication, signalling, computing and other electrical equipment. According to the values of current and voltage, electrical engineering is divided into high-current and low-current.
          </p>
          <p>
            Electrical engineering is also a branch of human activity concerned with the practical use of electrical energy. Hence, the scope of electrical engineering ranges from the simplest devices such as lightning rods to the most complex human creations such as computers, from digital watches to atomic power plants.
          </p>
          <p class="w3-left">
            <button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button>
          </p>
          <p class="w3-right">
            <a class="w3-button w3-black" href="eng_elektrotechnika.php">More</a>
            <button class="w3-button w3-black" onclick="document.getElementById('modal_ELEKTROTECHNICS').style.display='block'">Show Comments</button>
          </p>
          <p class="w3-clear"></p>
        </div>
        <form action="" method="post">
          <input type="hidden" name="section" value="ELEKTROTECHNICS">
          <input class="w3-input w3-border" type="text" name="comment" placeholder="Write your comment..." required>
          <button class="w3-button w3-black w3-margin-top" type="submit">Post</button>
        </form>
      </div>

      <!-- Blog entry: COMPUTER SYSTEMS -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>COMPUTER SYSTEMS</h3>
        </div>
        <div class="w3-justify">
          <p>A computer system is a complex unit of hardware and software components that performs data processing, storage and communication tasks. These systems can be simple, single-user machines, or more complex network structures such as server farms or distributed systems.</p>
          <p>
          Computer systems are used for various purposes, such as business, science, entertainment or education. Information security and system efficiency are of paramount importance in their operation.
          </p>
          <p class="w3-left">
            <button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button>
          </p>
          <p class="w3-right">
            <a class="w3-button w3-black" href="eng_pos.php">More</a>
            <button class="w3-button w3-black" onclick="document.getElementById('modal_COMPUTER_SYSTEMS').style.display='block'">Show Comments</button>
          </p>
          <p class="w3-clear"></p>
        </div>
        <form action="" method="post">
          <input type="hidden" name="section" value="COMPUTER SYSTEMS">
          <input class="w3-input w3-border" type="text" name="comment" placeholder="Write your comment..." required>
          <button class="w3-button w3-black w3-margin-top" type="submit">Post</button>
        </form>
      </div>

      <!-- Blog entry: ELECTRONICS -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>ELECTRONICS</h3>
        </div>
        <div class="w3-justify">
          <p>Electronics is the branch of electrical engineering that deals with the control of electric currents in circuits, semiconductor devices (e.g. transistors, diodes, integrated circuits) and signal processing.</p>
          <p>
          It can be divided into: analogue electronics using continuous signals (e.g. radios, amplifiers) digital electronics using discrete signals (0 and 1) (e.g. computers, microcontrollers). Its uses include information technology, automation, communications and consumer electronics.
          </p>
          <p class="w3-left">
            <button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button>
          </p>
          <p class="w3-right">
            <a class="w3-button w3-black" href="elektronika.php">More</a>
            <button class="w3-button w3-black" onclick="document.getElementById('modal_ELECTRONICS').style.display='block'">Show Comments</button>
          </p>
          <p class="w3-clear"></p>
        </div>
        <form action="" method="post">
          <input type="hidden" name="section" value="ELECTRONICS">
          <input class="w3-input w3-border" type="text" name="comment" placeholder="Write your comment..." required>
          <button class="w3-button w3-black w3-margin-top" type="submit">Post</button>
        </form>
      </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-black">
          <h4>Bukriš Dávid</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a chamber of great knowledge. I want to share that knowledge to the world.</p>
        </div>
      </div>
      <hr>
      <!-- Tags -->
      <div class="w3-white w3-margin">
        <a href="game.php" style="text-decoration: none;">
          <div class="w3-container w3-padding w3-black" style="cursor: pointer;">
            <p class="w3-center w3-text-white">Test yourself</p>
          </div>
        </a>
      </div>
      <!-- High Score Table -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding">
          <h3>User High Scores</h3>
          <table>
            <thead>
              <tr class="w3-black">
                <th>Username</th>
                <th>High Score</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($scoreResult && $scoreResult->num_rows > 0): ?>
                <?php while($row = $scoreResult->fetch_assoc()): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo htmlspecialchars($row['score']); ?></td>
                  </tr>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="2">No scores found.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

  <!-- Modals for Comments -->
  <!-- Modal for ELEKTROTECHNICS -->
  <?php
  $result = $conn->query("SELECT username, comment FROM comments WHERE section='ELEKTROTECHNICS' ORDER BY id DESC");
  ?>
  <div id="modal_ELEKTROTECHNICS" class="modal">
    <div class="modal-content">
      <span class="close" onclick="document.getElementById('modal_ELEKTROTECHNICS').style.display='none'">&times;</span>
      <h3>Comments for ELEKTROTECHNICS</h3>
      <?php if($result && $result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong> <?php echo htmlspecialchars($row['comment']); ?></p>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No comments yet.</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Modal for COMPUTER SYSTEMS -->
  <?php
  $result2 = $conn->query("SELECT username, comment FROM comments WHERE section='COMPUTER SYSTEMS' ORDER BY id DESC");
  ?>
  <div id="modal_COMPUTER_SYSTEMS" class="modal">
    <div class="modal-content">
      <span class="close" onclick="document.getElementById('modal_COMPUTER_SYSTEMS').style.display='none'">&times;</span>
      <h3>Comments for COMPUTER SYSTEMS</h3>
      <?php if($result2 && $result2->num_rows > 0): ?>
        <?php while($row = $result2->fetch_assoc()): ?>
          <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong> <?php echo htmlspecialchars($row['comment']); ?></p>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No comments yet.</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Modal for ELEKTRONICS -->
  <?php
  $result3 = $conn->query("SELECT username, comment FROM comments WHERE section='ELECTRONICS' ORDER BY id DESC");
  ?>
  <div id="modal_ELECTRONICS" class="modal">
    <div class="modal-content">
      <span class="close" onclick="document.getElementById('modal_ELECTRONICS').style.display='none'">&times;</span>
      <h3>Comments for ELECTRONICS</h3>
      <?php if($result3 && $result3->num_rows > 0): ?>
        <?php while($row = $result3->fetch_assoc()): ?>
          <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong> <?php echo htmlspecialchars($row['comment']); ?></p>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No comments yet.</p>
      <?php endif; ?>
    </div>
  </div>
  
<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom">
    <i class="fa fa-arrow-up w3-margin-right"></i>To the top
  </a>
</footer>

<script>
function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}

// Optional: Close modal when clicking outside the modal-content
window.onclick = function(event) {
  var modals = document.getElementsByClassName('modal');
  for (var i = 0; i < modals.length; i++) {
    if (event.target == modals[i]) {
      modals[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
<?php
// Close both database connections
$conn->close();
$connScores->close();
?>
