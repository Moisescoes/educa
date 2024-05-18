function evaluateAnswers() {
    const correctAnswers = {
        image1: 3,
        image2: 5,
        image3: 2,
        image4: 4,
        image5: 7,
        image6: 1,
        image7: 6,
        image8: 8,
        image9: 9
    };

    let score = 0;
    for (let i = 1; i <= 9; i++) {
        const answer = parseInt(document.getElementById(`image${i}`).value) || 0;
        if (answer === correctAnswers[`image${i}`]) {
            score++;
        }
    }

    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `Calificación: ${score}/9`;

    // Establecer el valor del campo oculto con la calificación
    document.getElementById("calificacionQ3").value = score;

    // Obtener una referencia al formulario y enviarlo
    document.getElementById('activityForm').submit();
}

