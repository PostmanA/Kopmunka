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
        question: "What is the largest ocean on Earth?",
        options: {
            A: "Atlantic Ocean",
            B: "Indian Ocean",
            C: "Arctic Ocean",
            D: "Pacific Ocean"
        },
        correctAnswer: "D",

    },
    {
        question: "Which animal is known as the 'King of the Jungle'?",
        options: {
            A: "Elephant",
            B: "Tiger",
            C: "Lion",
            D: "Bear"
        },
        correctAnswer: "C",

    },
    {
        question: "How many continents are there on Earth?",
        options: {
            A: "Five",
            B: "Six",
            C: "Seven",
            D: "Eight"
        },
        correctAnswer: "C",

    },
    {
        question: "Which language is primarily spoken in Brazil?",
        options: {
            A: "Spanish",
            B: "Portuguese",
            C: "French",
            D: "English"
        },
        correctAnswer: "B",

    },
    {
        question: "In which country would you find the Great Wall?",
        options: {
            A: "India",
            B: "China",
            C: "Japan",
            D: "South Korea"
        },
        correctAnswer: "B",

    },
    {
        question: "What is the name of the longest river in the world?",
        options: {
            A: "Amazon River",
            B: "Nile River",
            C: "Yangtze River",
            D: "Mississippi River"
        },
        correctAnswer: "B",

    },
    {
        question: "Which famous scientist developed the theory of relativity?",
        options: {
            A: "Isaac Newton",
            B: "Albert Einstein",
            C: "Galileo Galilei",
            D: "Marie Curie"
        },
        correctAnswer: "B",

    },
    {
        question: "What is the boiling point of water in degrees Celsius?",
        options: {
            A: "50°C",
            B: "90°C",
            C: "100°C",
            D: "150°C"
        },
        correctAnswer: "C",

    },
    {
        question: "Which instrument is used to measure temperature?",
        options: {
            A: "Barometer",
            B: "Thermometer",
            C: "Anemometer",
            D: "Hygrometer"
        },
        correctAnswer: "B",

    },
    {
        question: "What is the tallest mountain in the world?",
        options: {
            A: "Mount Kilimanjaro",
            B: "Mount Everest",
            C: "K2",
            D: "Mount Elbrus"
        },
        correctAnswer: "B",

    },
    {
        question: "Which country is known for inventing the pizza?",
        options: {
            A: "France",
            B: "Italy",
            C: "Mexico",
            D: "Greece"
        },
        correctAnswer: "B",
    },
    {
        question: "How many planets are in our solar system?",
        options: {
            A: "Seven",
            B: "Eight",
            C: "Nine",
            D: "Ten"
        },
        correctAnswer: "B",

    },
    {
        question: "What color are the stars on the flag of the United States?",
        options: {
            A: "White",
            B: "Blue",
            C: "Red",
            D: "Gold"
        },
        correctAnswer: "A",

    },
    {
        question: "Which country is home to the kangaroo?",
        options: {
            A: "South Africa",
            B: "Australia",
            C: "India",
            D: "Brazil"
        },
        correctAnswer: "B",

    },
    {
        question: "How many sides does a triangle have?",
        options: {
            A: "Two",
            B: "Three",
            C: "Four",
            D: "Five"
        },
        correctAnswer: "B",

    },
    {
        question: "What is the chemical symbol for water?",
        options: {
            A: "H2",
            B: "H2O",
            C: "HO2",
            D: "O2H"
        },
        correctAnswer: "B",

    },
    {
        question: "What sport is known as the 'king of sports'?",
        options: {
            A: "Basketball",
            B: "Tennis",
            C: "Soccer (Football)",
            D: "Baseball"
        },
        correctAnswer: "C",

    },
    {
        question: "Which continent is the Sahara Desert located on?",
        options: {
            A: "Africa",
            B: "Asia",
            C: "Australia",
            D: "South America"
        },
        correctAnswer: "A",

    }
];

const prizeStructure = [
    100,      // Question 1
    200,      // Question 2
    300,      // Question 3
    500,      // Question 4
    1000,    // Question 5
    2000,    // Question 6
    4000,    // Question 7
    8000,    // Question 8
    16000,   // Question 9
    32000,   // Question 10
    64000,   // Question 11
    125000,  // Question 12
    250000,  // Question 13
    500000,  // Question 14
    1000000  // Question 15
];

let shuffledQuestions = [];
let currentQuestionIndex = 0;
let currentPrize = 0;

// Shuffle the questions array
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

function startGame() {
    shuffledQuestions = shuffle(questions).slice(0, 15); // Shuffle and select 15 questions
    renderPrizeStructure();  // Render the prize structure list
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
    highlightCurrentPrizeLevel();  // Highlight the current prize level
}

// Render the prize structure in HTML
function renderPrizeStructure() {
    const prizeList = document.getElementById('prize-structure');
    prizeList.innerHTML = '';  // Clear existing content

    // Populate the prize structure dynamically
    prizeStructure.reverse().forEach((prize, index) => {
        const li = document.createElement('li');
        li.setAttribute('id', `prize-${index}`);
        li.textContent = `$${prize}`;
        prizeList.appendChild(li);
    });
    prizeStructure.reverse();  // Restore the original order
}

// Highlight the current prize level and mark completed levels
function renderPrizeStructure() {
    const prizeList = document.getElementById('prize-structure');
    prizeList.innerHTML = '';

    prizeStructure.reverse().forEach((prize, index) => {
        const li = document.createElement('li');
        li.setAttribute('id', `prize-${index}`);
        li.textContent = `$${prize}`;
        prizeList.appendChild(li);
    });
    prizeStructure.reverse(); // Reset original order
}

function highlightCurrentPrizeLevel() {
    const prizeListItems = document.querySelectorAll('#prize-structure li');
    prizeListItems.forEach((item, index) => {
        item.classList.remove('current', 'completed');

        const reverseIndex = prizeStructure.length - 1 - index;

        if (reverseIndex < currentQuestionIndex) {
            item.classList.add('completed'); // Completed levels
        } else if (reverseIndex === currentQuestionIndex) {
            item.classList.add('current'); // Current question level
        }
    });
}

function checkAnswer(selectedAnswer) {
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
        alert("Wrong answer! Game over.");
        resetGame();
    }
}

function nextQuestion() {


    currentQuestionIndex++;
    if (currentQuestionIndex >= shuffledQuestions.length) {
        alert(`Congratulations! You've won $${currentPrize}!`);
        resetGame();
    } else {
        loadQuestion();
    }
    //reset the visibility of all the buttons


}

function resetGame() {
    location.reload();
}

function useFiftyFifty() {
    const currentQuestion = shuffledQuestions[currentQuestionIndex];
    const correctAnswer = currentQuestion.correctAnswer;

    const wrongOptions = ['A', 'B', 'C', 'D'].filter(option => option !== correctAnswer);
    const removedOptions = wrongOptions.sort(() => Math.random() - 0.5).slice(0, 2);

    removedOptions.forEach(option => {
        const button = document.getElementById(`answer${option}`);
        if (button) {
            button.style.visibility = 'hidden';
        }
    });

    document.getElementById('fifty-fifty').disabled = true;
    document.getElementById('fifty-fifty').style.backgroundColor = 'gray';
    //on hover no cursor
    document.getElementById('fifty-fifty').style.cursor = 'default';
}

function useAudience(){
    const currentQuestion = shuffledQuestions[currentQuestionIndex];
    const correctAnswer = currentQuestion.correctAnswer;
    //generate random audience results for each answer the correct answer will have the highest percentage
    const audienceResults = {
        A: Math.floor(Math.random() * 100),
        B: Math.floor(Math.random() * 100),
        C: Math.floor(Math.random() * 100),
        D: Math.floor(Math.random() * 100)
    };
    audienceResults[correctAnswer] = Math.max(audienceResults.A, audienceResults.B, audienceResults.C, audienceResults.D) + Math.floor(Math.random() * 10);


    const total = audienceResults.A + audienceResults.B + audienceResults.C + audienceResults.D;
    const percentageA = Math.round((audienceResults.A / total) * 100);
    const percentageB = Math.round((audienceResults.B / total) * 100);
    const percentageC = Math.round((audienceResults.C / total) * 100);
    const percentageD = Math.round((audienceResults.D / total) * 100);

    // Display the audience results on the buttons under the answers
    document.getElementById('answerA').textContent = `A: ${currentQuestion.options.A} (${percentageA}%)`;
    document.getElementById('answerB').textContent = `B: ${currentQuestion.options.B} (${percentageB}%)`;
    document.getElementById('answerC').textContent = `C: ${currentQuestion.options.C} (${percentageC}%)`;
    document.getElementById('answerD').textContent = `D: ${currentQuestion.options.D} (${percentageD}%)`;

    document.getElementById('audience').disabled = true;
    document.getElementById('audience').style.backgroundColor = 'gray';
    document.getElementById('audience').style.cursor = 'default';
}

function skipQuestion() {
    document.getElementById('phone-a-friend').disabled = true;
    document.getElementById('phone-a-friend').style.backgroundColor = 'gray';
    document.getElementById('phone-a-friend').style.cursor = 'default';

    document.getElementById('answerA').style.visibility = 'visible';
    document.getElementById('answerB').style.visibility = 'visible';
    document.getElementById('answerC').style.visibility = 'visible';
    document.getElementById('answerD').style.visibility = 'visible';


    nextQuestion();
}


