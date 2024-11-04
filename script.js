const questions = [
    {
        question: "Which planet is known as the Red Planet?",
        options: {
            A: "Venus",
            B: "Mars",
            C: "Jupiter",
            D: "Mercury"
        },
        correctAnswer: "B",
    },
    {
        question: "What is the capital of France?",
        options: {
            A: "Berlin",
            B: "Madrid",
            C: "Paris",
            D: "Lisbon"
        },
        correctAnswer: "C",
    },
    {
        question: "In the UK, the abbreviation NHS stands for National what Service?",
        options: {
            A: "Humanity",
            B: "Health",
            C: "Honour",
            D: "Household"
        },
        correctAnswer: "B",
    },
    {
        question: "Which Disney character famously leaves a glass slipper behind at a royal ball?",
        options: {
            A: "Pocahontas",
            B: "Sleeping Beauty",
            C: "Cinderella",
            D: "Elsa"
        },
        correctAnswer: "C",
    },
    {
        question: "What name is given to the revolving belt machinery in an airport that delivers checked luggage from the plane to baggage reclaim?",
        options: {
            A: "Hangar",
            B: "Terminal",
            C: "Concourse",
            D: "Carousel"
        },
        correctAnswer: "D",
    },
    {
        question: "Which of these brands was chiefly associated with the manufacture of household locks?",
        options: {
            A: "Phillips",
            B: "Flymo",
            C: "Chubb",
            D: "Ronseal"
        },
        correctAnswer: "C",
    },
]

let shuffledQuestions = [];
let currentQuestionIndex = 0;
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}
function startGame() {
    shuffledQuestions = shuffle(questions).slice(0, 15); // Shuffle and select 15 questions
    loadQuestion();
}
window.onload = function() {
    startGame();
}
function loadQuestion() {
    const currentQuestion = shuffledQuestions[currentQuestionIndex];
    document.getElementById('question-text').textContent = currentQuestion.question;
    document.getElementById('answerA').textContent = `A: ${currentQuestion.options.A}`;
    document.getElementById('answerB').textContent = `B: ${currentQuestion.options.B}`;
    document.getElementById('answerC').textContent = `C: ${currentQuestion.options.C}`;
    document.getElementById('answerD').textContent = `D: ${currentQuestion.options.D}`;
}
function checkAnswer(selectedAnswer) {
    document.getElementById('answerA').style.visibility = 'visible';
    document.getElementById('answerB').style.visibility = 'visible';
    document.getElementById('answerC').style.visibility = 'visible';
    document.getElementById('answerD').style.visibility = 'visible';

    const currentQuestion = shuffledQuestions[currentQuestionIndex];

    if (selectedAnswer === currentQuestion.correctAnswer) {
        nextQuestion();
    } else {
        alert("Wrong answer! Game over.");
        resetGame();
    }
}

function nextQuestion() {
    currentQuestionIndex++;
    if (currentQuestionIndex >= shuffledQuestions.length) {
        resetGame();
    } else {
        loadQuestion();
    }
}
function resetGame() {
    location.reload();
}