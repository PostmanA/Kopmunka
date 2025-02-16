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
        header("Location: index_hu.php");
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
<title>Főoldal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
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
  <a href="index_hu.php" class="w3-bar-item w3-button">Főoldal</a>
  <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="language">Nyelv<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="index.php" class="w3-bar-item w3-button">English</a>
      </div>
    </div>
  <a href="logout.php" class="w3-bar-item w3-button">Kijelentkezés</a>
  <a href="reset-password.php" class="w3-bar-item w3-button">Jelszó változtatás</a>
  <b class="w3-bar-item">Üdvözlet <?php echo htmlspecialchars($_SESSION["username"]); ?></b>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>Legyen Ön is elektromos</b></h1>
  </header>


  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>ELEKTROTECHNIKA</h3>
        </div>

        <div class="w3-justify">
          <p>A villamosmérnöki tudomány és műszaki tudományág az elektromágnesesség műszaki alkalmazásaival foglalkozik, beleértve az elektromos energia előállítását, elosztását és más energiaformákká történő átalakítását, valamint a kommunikációs, jelző- és számítástechnikai és egyéb elektromos berendezések építését. Az áram és a feszültség értékei szerint az elektrotechnikát nagyáramú és gyengeáramúakra osztják.
</p>
          <p>Az elektrotechnika az emberi tevékenységnek az elektromos energia gyakorlati felhasználásával foglalkozó ága is. Ezért a villamosmérnöki tevékenység a legegyszerűbb eszközöktől, mint például a villámhárítótól a legbonyolultabb emberi alkotásokig, mint például a számítógépek , a digitális órától az atomerőművekig terjed.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right">
            <a class="w3-button w3-black" href="elektrotechnika.php">Tovább</a>
            <button class="w3-button w3-black" onclick="document.getElementById('modal_ELEKTROTECHNICS').style.display='block'">Hozzászólások megtekintése</button>
          </p>
          <p class="w3-clear"></p>
        </div>
        <form action="" method="post">
          <input type="hidden" name="section" value="ELEKTROTECHNICS">
          <input class="w3-input w3-border" type="text" name="comment" placeholder="Hozzászólás írása" required>
          <button class="w3-button w3-black w3-margin-top" type="submit">Hozzászólás</button>
        </form>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>SZÁMITÓGÉPES RENDSZEREK</h3>
        </div>

        <div class="w3-justify">
          <p>
          A számítógépes rendszer olyan hardver- és szoftverkomponensekből álló összetett egység, amely adatfeldolgozási, tárolási és kommunikációs feladatokat lát el. Ezek a rendszerek lehetnek egyszerű, egyetlen felhasználós gépek, de összetettebb hálózati struktúrák, például szerverfarmok vagy elosztott rendszerek is.</p>
          <p>A számítógépes rendszereket különböző célokra használják, például üzleti, tudományos, szórakoztatóipari vagy oktatási területen. Az információbiztonság és a rendszerhatékonyság kiemelten fontos szempontok ezek működtetésénél.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right">
            <a class="w3-button w3-black" href="pos.php">Tovább</a>
            <button class="w3-button w3-black" onclick="document.getElementById('modal_COMPUTER_SYSTEMS').style.display='block'">Hozzászólások megtekintése</button>
          </p>
          <p class="w3-clear"></p>
        </div>
        <form action="" method="post">
          <input type="hidden" name="section" value="COMPUTER SYSTEMS">
          <input class="w3-input w3-border" type="text" name="comment" placeholder="Hozzászólás írása" required>
          <button class="w3-button w3-black w3-margin-top" type="submit">Hozzászólás</button>
        </form>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>ELEKTRONIKA</h3>
        </div>

        <div class="w3-justify">
          
          <p>Az elektronika az elektrotechnika azon ága, amely az elektromos áram áramköri vezérlésével, félvezető eszközökkel (pl. tranzisztorok, diódák, integrált áramkörök) és jelek feldolgozásával foglalkozik.</p>
          <p>Felosztható: Analóg elektronikára folyamatos jelekkel dolgozik (pl. rádiók, erősítők) digitális elektronikára diszkrét jeleket (0 és 1) használ (pl. számítógépek, mikrovezérlők). Felhasználása kiterjed az információtechnológiára, automatizálásra, kommunikációra és szórakoztató elektronikára.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right">
            <a class="w3-button w3-black" href="elektronika.php">Tovább</a>
            <button class="w3-button w3-black" onclick="document.getElementById('modal_ELECTRONICS').style.display='block'">Hozzászólások megtekintése</button>
          </p>
          <p class="w3-clear"></p>
        </div>
        <form action="" method="post">
          <input type="hidden" name="section" value="ELECTRONICS">
          <input class="w3-input w3-border" type="text" name="comment" placeholder="Hozzászólás írása" required>
          <button class="w3-button w3-black w3-margin-top" type="submit">Hozzászólás</button>
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
          <p>Csak én, és magam, felfedezem az ismeretlenség univerzumát. Szívemben szeretet és nagy tudással rendelkezek. Ezt a tudást szeretném megosztani a világgal..</p>
        </div>
      </div>
      <hr>
      <!-- Tags -->
      <div class="w3-white w3-margin">
        <a href="game.php" style="text-decoration: none;">
          <div class="w3-container w3-padding w3-black" style="cursor: pointer;">
            <p class="w3-center w3-text-white">Próbáld ki magad</p>
          </div>
        </a>
      </div>
      <!-- High Score Table -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding">
          <h3>Felhasználók pontszámai</h3>
          <table>
            <thead>
              <tr class="w3-black">
                <th>Felhasználó</th>
                <th>Pontszám</th>
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
                  <td colspan="2">Nincsenek pontszámok</td>
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
      <h3>ELEKTROTECHNIKA Hozzászólásai</h3>
      <?php if($result && $result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong> <?php echo htmlspecialchars($row['comment']); ?></p>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Nincsenek Hozzászólások</p>
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
      <h3>SZÁMITÓGÉPES RENDSZEREK Hozzászólásai</h3>
      <?php if($result2 && $result2->num_rows > 0): ?>
        <?php while($row = $result2->fetch_assoc()): ?>
          <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong> <?php echo htmlspecialchars($row['comment']); ?></p>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Nincsenek Hozzászólások</p>
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
      <h3>ELEKTRONIKA Hozzászólásai</h3>
      <?php if($result3 && $result3->num_rows > 0): ?>
        <?php while($row = $result3->fetch_assoc()): ?>
          <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong> <?php echo htmlspecialchars($row['comment']); ?></p>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Nincsenek Hozzászólások</p>
      <?php endif; ?>
    </div>
  </div>
  
<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom">
    <i class="fa fa-arrow-up w3-margin-right"></i>Vissza a tetejere
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

