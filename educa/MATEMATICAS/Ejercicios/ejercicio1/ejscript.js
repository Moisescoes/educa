const correctAnswers = {
  question1: "11",
  question2: "12",
  question3: "7",
  question4: "6",
  question5: "18",
  question6: "10",
  question7: "12",
  question8: "7",
  question9: "10",
  question10: "2/4",
};

function checkAnswers() {
  const form = document.getElementById("quiz-form");
  let score = 0;
  const totalQuestions = Object.keys(correctAnswers).length;

  for (const [question, correctAnswer] of Object.entries(correctAnswers)) {
    const userAnswer = form.elements[question].value;
    if (userAnswer === correctAnswer) {
      score++;
    }
  }

  // Establecer el valor del campo oculto con la calificación
  document.getElementById("calificacionQ1").value = score;

  // Opcionalmente, puedes mostrar la calificación al usuario
  const result = document.getElementById("result");
  result.innerHTML = `Calificación: ${score} de ${totalQuestions}`;

  // Enviar el formulario
  form.submit();
}
