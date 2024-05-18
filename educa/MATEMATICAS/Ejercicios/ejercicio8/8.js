function checkAnswers() {
  const inputElements = document.querySelectorAll(".number-input");
  const correctAnswers = [-8, -6, -4, -2, 2, 4, 6, 8];
  let correctCount = 0;

  inputElements.forEach((input, index) => {
    const userAnswer = parseInt(input.value);
    const correctAnswer = correctAnswers[index];

    if (!isNaN(userAnswer) && userAnswer === correctAnswer) {
      input.classList.remove("incorrect");
      input.classList.add("correct");
      correctCount++;
    } else {
      input.classList.remove("correct");
      input.classList.add("incorrect");
    }
  });

  const totalQuestions = correctAnswers.length;

  const resultElement = document.getElementById("result");
  resultElement.textContent = `Calificación: ${correctCount}/${totalQuestions}`;

  if (correctCount === totalQuestions) {
    resultElement.style.color = "green";
  } else {
    resultElement.style.color = "red";
  }

  // Agregar el resultado a un campo oculto en el formulario
  document.getElementById("calificacionQ4").value = correctCount;

  // Enviar el formulario
  document.getElementById("evaluacionForm").submit();
}
