document.addEventListener('DOMContentLoaded', function() {
  const questions = [
    {
      question: "¿Qué significa Reducir?",
      options: [
        "Utilizar algo más de una vez",
        "Disminuir el uso de recursos",
      ],
      answer: "Disminuir el uso de recursos"
    },
    {
      question: "¿Qué significa Reutilizar?",
      options: [
        "Utilizar algo más de una vez",
        "Disminuir el uso de recursos",
      ],
      answer: "Utilizar algo más de una vez"
    },
    {
      question: "¿Qué significa Reciclar?",
      options: [
        "Utilizar algo más de una vez",
        "Transformar residuos en nuevos productos"
      ],
      answer: "Transformar residuos en nuevos productos"
    },
    {
      question: "¿Cuál de las siguientes acciones es un ejemplo de Reducir?",
      options: [
        "Comprar productos con menos embalaje",
        "Donar ropa usada",
      ],
      answer: "Comprar productos con menos embalaje"
    },
    {
      question: "¿Cuál de las siguientes acciones es un ejemplo de Reutilizar?",
      options: [
        "Usar bolsas de tela en lugar de bolsas de plástico",
        "Separar residuos en casa",
      ],
      answer: "Usar bolsas de tela en lugar de bolsas de plástico"
    },
    {
      question: "¿Cuál de las siguientes acciones es un ejemplo de Reciclar?",
      options: [
        "Usar una botella de agua reutilizable",
        "Llevar papel al contenedor azul"
      ],
      answer: "Llevar papel al contenedor azul"
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


  
  