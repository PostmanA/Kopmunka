<?php
session_start();

// Require user to be logged in.
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login2.php");
    exit;
}

// --- SCORE UPDATE LOGIC ---
// If a POST request is sent with a score, update the user's high score in the database.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["score"])) {
    $score = (int)$_POST["score"];
    
    // Database connection details.
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "felhasznalok";  // The database name

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        echo json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]);
        exit;
    }

    // Check if the user already has a recorded score.
    $stmt = $conn->prepare("SELECT score FROM scores WHERE username = ?");
    $stmt->bind_param("s", $_SESSION["username"]);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $prevScore = (int)$row["score"];
        if ($score > $prevScore) {
            // Update with the higher score.
            $stmt->close();
            $stmt = $conn->prepare("UPDATE scores SET score = ? WHERE username = ?");
            $stmt->bind_param("is", $score, $_SESSION["username"]);
            $stmt->execute();
            echo json_encode(["success" => true, "message" => "Score updated"]);
        } else {
            echo json_encode(["success" => true, "message" => "No update needed"]);
        }
    } else {
        // No score recorded yet—insert a new record.
        $stmt->close();
        $stmt = $conn->prepare("INSERT INTO scores (username, score) VALUES (?, ?)");
        $stmt->bind_param("si", $_SESSION["username"], $score);
        $stmt->execute();
        echo json_encode(["success" => true, "message" => "Score saved"]);
    }
    $stmt->close();
    $conn->close();
    exit; // Do not output the game HTML during an AJAX call.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Who Wants to Be a Millionaire</title>
  <link rel="stylesheet" href="game.css" />
</head>
<body>
  <div id="game-container">
    <div id="prize-container" class="column">
      <ul id="prize-structure">
        <!-- Prize structure items will be dynamically generated -->
      </ul>
    </div>

    <div id="question-container" class="column">
      <p id="question-text">Question will appear here</p>
      <div id="answers-container">
        <button onclick="checkAnswer('A')" id="answerA" class="answer">A: Option 1</button>
        <button onclick="checkAnswer('B')" id="answerB" class="answer">B: Option 2</button>
        <button onclick="checkAnswer('C')" id="answerC" class="answer">C: Option 3</button>
        <button onclick="checkAnswer('D')" id="answerD" class="answer">D: Option 4</button>
      </div>
    </div>

    <div id="lifeline-container" class="column">
      <button onclick="useFiftyFifty()" class="lifeline" id="fifty-fifty">50:50</button>
      <button onclick="useAudience()" class="lifeline" id="audience">Audience</button>
      <button onclick="skipQuestion()" class="lifeline" id="phone-a-friend">Skip the question</button>
      <a href="index.php" class="lifeline">Back</a>
    </div>
  </div>

  <!-- Include your game logic script -->
  <script src="script.js"></script>
  
  <!-- Inline JavaScript to integrate score updating -->
  <script>
    // This function sends the final score to game.php using a POST request.
    function updateScore(score) {
      fetch("game.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "score=" + encodeURIComponent(score)
      })
      .then(response => response.json())
      .then(data => {
        console.log(data.message);
      })
      .catch(error => console.error("Error updating score:", error));
    }

    /* 
      The following code assumes that your external script.js defines global variables 
      and functions such as:
        - shuffledQuestions (an array of questions)
        - currentQuestionIndex (the index of the current question)
        - prizeStructure (an array of prize amounts)
        - currentPrize (the prize amount of the current question)
        - loadQuestion(), highlightCurrentPrizeLevel(), resetGame(), etc.
      
      We override (or extend) the checkAnswer() and nextQuestion() functions so that
      when the game ends (either after a wrong answer or after all questions are answered),
      the final score is sent to the server.
    */

    // Override checkAnswer to update the score on a wrong answer.
    const originalCheckAnswer = checkAnswer;
    window.checkAnswer = function(selectedAnswer) {
      // Make sure all answer buttons are visible (in case a lifeline hid some).
      document.getElementById('answerA').style.visibility = 'visible';
      document.getElementById('answerB').style.visibility = 'visible';
      document.getElementById('answerC').style.visibility = 'visible';
      document.getElementById('answerD').style.visibility = 'visible';
      
      const currentQuestion = shuffledQuestions[currentQuestionIndex];
      if (selectedAnswer === currentQuestion.correctAnswer) {
        currentPrize = prizeStructure[currentQuestionIndex];
        highlightCurrentPrizeLevel();
        nextQuestion();
      } else {
        // On a wrong answer, update the score (if any prize was won) and end the game.
        updateScore(currentPrize);
        alert("Wrong answer! Game over.");
        resetGame();
      }
    };

    // Override nextQuestion to update the score when the game is completed.
    const originalNextQuestion = nextQuestion;
    window.nextQuestion = function() {
      currentQuestionIndex++;
      if (currentQuestionIndex >= shuffledQuestions.length) {
        // Game completed successfully. Update the score.
        updateScore(currentPrize);
        alert(`Congratulations! You've won $${currentPrize}!`);
        resetGame();
      } else {
        loadQuestion();
      }
    };

    // (Optionally) If you have an "endGame" function in your game logic,
    // you could also call updateScore() there.
  </script>
</body>
</html>
