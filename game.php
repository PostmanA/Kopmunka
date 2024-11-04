<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legyen ön is elektromos a jatek</title>
    <link rel="stylesheet" href="game.css">
    <script src="script.js"></script>
</head>
<body>
<div id="game-container">
    <div id="question-container" class="column">
        <p id="question-text">Question will appear here</p>
        <div id="answers-container">
            <button onclick="checkAnswer('A')" id="answerA" class="answer">A: Option 1</button>
            <button onclick="checkAnswer('B')" id="answerB" class="answer">B: Option 2</button>
            <button onclick="checkAnswer('C')" id="answerC" class="answer">C: Option 3</button>
            <button onclick="checkAnswer('D')" id="answerD" class="answer">D: Option 4</button>
        </div>
    </div>

</div>
<script src="script.js"></script>
</body>
</html>