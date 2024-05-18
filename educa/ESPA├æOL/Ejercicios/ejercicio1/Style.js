document.addEventListener('DOMContentLoaded', function () {
  const wordContainer = document.getElementById('word-container');
  const checkBtn = document.getElementById('check-btn');
  const resultText = document.getElementById('result');
  const scoreValue = document.getElementById('score-value');
  const hiddenScore = document.getElementById('hidden-score');

  const wordPairs = [
    { question: 'Alegre', options: ['Triste', 'Feliz', 'Soleado', 'Grande'], correctAnswer: 'Feliz' },
    { question: 'Rápido', options: ['Lento', 'Veloz', 'Hermoso', 'Pequeño'], correctAnswer: 'Veloz' },
    { question: 'Caliente', options: ['Frío', 'Tibio', 'Cálido', 'Gigante'], correctAnswer: 'Cálido' },
    { question: 'Bello', options: ['Feo', 'Bonito', 'Hermoso', 'Elegante'], correctAnswer: 'Hermoso' },
  ];

  let score = 0;

  displayQuestion();

  checkBtn.addEventListener('click', function () {
    const selectedOption = document.querySelector('input[name="option"]:checked');
    if (!selectedOption) {
      resultText.textContent = 'Por favor, elige una opción.';
      resultText.style.color = '#f44336';
      return;
    }

    const selectedAnswer = selectedOption.value;
    const currentQuestion = wordPairs.find(pair => pair.question === wordContainer.dataset.question);
    if (selectedAnswer === currentQuestion.correctAnswer) {
      score++;
      scoreValue.textContent = score;
      hiddenScore.value = score; // Actualiza el valor del campo oculto
      resultText.textContent = '¡Respuesta correcta!';
      resultText.style.color = '#4caf50';
    } else {
      resultText.textContent = 'Respuesta incorrecta. La respuesta correcta era: ' + currentQuestion.correctAnswer;
      resultText.style.color = '#f44336';
    }

    setTimeout(() => {
      selectedOption.checked = false;
      displayQuestion();
    }, 1000);
  });

  function displayQuestion() {
    const randomIndex = Math.floor(Math.random() * wordPairs.length);
    const question = wordPairs[randomIndex];
    wordContainer.dataset.question = question.question;
    wordContainer.innerHTML = `
      <p>${question.question}</p>
      <form>
        ${question.options.map(option => `
          <label>
            <input type="radio" name="option" value="${option}">
            ${option}
          </label>
        `).join('')}
      </form>
    `;
  }
});
