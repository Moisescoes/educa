document.addEventListener('DOMContentLoaded', function() {
  const questions = [
    {
      question: "¿Cuál es el estado sólido del agua?",
      options: ["Líquido", "Sólido", "Gas"],
      answer: "Sólido"
    },
    {
      question: "¿En qué estado se encuentra el agua a temperatura ambiente?",
      options: ["Líquido", "Sólido", "Gas"],
      answer: "Líquido"
    },
    {
      question: "¿Qué estado del agua es el vapor?",
      options: ["Líquido", "Sólido", "Gas"],
      answer: "Gas"
    }
  ];

  let currentQuestionIndex = 0;
  let score = 0;

  const questionContainer = document.getElementById('question-container');
  const optionsContainer = document.getElementById('options-container');
  const nextButton = document.getElementById('next-btn');
  const scoreElement = document.getElementById('puntuacion');

  function loadQuestion() {
    clearOptions();
    const currentQuestion = questions[currentQuestionIndex];
    questionContainer.textContent = currentQuestion.question;

    currentQuestion.options.forEach(option => {
      const button = document.createElement('button');
      button.textContent = option;
      button.addEventListener('click', () => selectOption(option));
      optionsContainer.appendChild(button);
    });

    nextButton.style.display = 'none';
  }

  function clearOptions() {
    optionsContainer.innerHTML = '';
  }

  function selectOption(selectedOption) {
    const currentQuestion = questions[currentQuestionIndex];
    if (selectedOption === currentQuestion.answer) {
      score += 10;
      scoreElement.textContent = score;
    }
    Array.from(optionsContainer.children).forEach(button => {
      button.disabled = true;
      if (button.textContent === currentQuestion.answer) {
        button.style.backgroundColor = 'green';
      } else {
        button.style.backgroundColor = 'red';
      }
    });
    nextButton.style.display = 'block';
  }

  nextButton.addEventListener('click', () => {
    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
      loadQuestion();
    } else {
      alert(`¡Felicidades! Has completado el juego con una puntuación de ${score}.`);
      // Aquí puedes reiniciar el juego o redirigir a otra página si lo deseas
      currentQuestionIndex = 0;
      score = 0;
      scoreElement.textContent = score;
      loadQuestion();
    }
  });

  loadQuestion();
});





  