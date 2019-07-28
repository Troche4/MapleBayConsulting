
const myQuestions = [
    {
        question: "1. Is your company in a crowded playing field of competitors?",
        answers: ["Yes", "No"],
    },
    {
        question: "2. Do you need to find a new market to play in?",
        answers: ["Yes", "No"],
    },
    {
        question: "3. Is there a competitor with a significatn advantage?",
        answers: ["Yes", "No"],
    },
    {
        question: "4. Are there forces (social, legal, technical, regulatory, or demographic) over which you seem to have little or no control that are forming your destiny?",
        answers: ["Yes", "No"],
    },
    {
        question: "5. Is there a scenario that comes to mind where your organization grows exponentially?",
        answers: ["Yes", "No"],
    },
    {
        question: "6. Is there a scenario where your company quickly shrinks?",
        answers: ["Yes", "No"],
    },
    {
        question: "7. Do you know what your competitors are doing?",
        answers: ["Yes", "No"],
    },
    {
        question: "8. Can you quickly identify a smart, realistic, relatively fast way to gain sustainable competitive advantage?",
        answers: ["Yes", "No"],
    }
];

function buildQuiz(){
    const output = [];
    myQuestions.forEach(
        (currentQuestion, questionNumber) => {
            const answers = [];
            for(option in currentQuestion.answers){
                answers.push(
                    `<label>
                        <input type="radio" name="question${questionNumber}" value="${letter}">
                        ${letter} : ${currentQuestion.answers[option]}
                    </label>`
                );
            }
            output.push(
                `<div class="question"> ${currentQuestion.question} </div>
                <div class="answers"> ${answers.join('')} </div>`
            );
        }
    );
    quizContainer.innerHTML = output.join('');
}

function showResults(){
    const answerContainers = quizContainer.querySelectorAll('.answers';)
}

buildQuiz()

submitButton.addEventListener('click', showResults)