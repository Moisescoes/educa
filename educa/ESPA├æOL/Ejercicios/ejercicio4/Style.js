document.addEventListener('DOMContentLoaded', function() {
    const preguntas = [
      {
        pregunta: '¿Cuál es el sinónimo de "rápido"?',
        opciones: ['Lento', 'Ágil', 'Pesado', 'Difícil'],
        respuestaCorrecta: 1
      },
      {
        pregunta: '¿Cuál es el antónimo de "grande"?',
        opciones: ['Enorme', 'Gigante', 'Pequeño', 'Alto'],
        respuestaCorrecta: 2
      },
      {
        pregunta: '¿Qué significa la palabra "efímero"?',
        opciones: ['Duradero', 'Fugaz', 'Pesado', 'Eterno'],
        respuestaCorrecta: 1
      },
      {
        pregunta: '¿Qué es un sinónimo de "feliz"?',
        opciones: ['Triste', 'Alegre', 'Melancólico', 'Deprimido'],
        respuestaCorrecta: 1
      }
    ];
  
    let preguntaActual = 0;
    let puntaje = 0;
  
    const preguntaElem = document.getElementById('pregunta');
    const opcionesElem = document.getElementById('opciones');
    const resultadoElem = document.getElementById('resultado');
    const siguienteBtn = document.getElementById('siguiente-btn');
    const resetBtn = document.getElementById('reset-btn');
  
    function mostrarPregunta() {
      const pregunta = preguntas[preguntaActual];
      preguntaElem.textContent = pregunta.pregunta;
      opcionesElem.querySelectorAll('.opcion').forEach((opcionElem, index) => {
        opcionElem.textContent = pregunta.opciones[index];
        opcionElem.disabled = false;
        opcionElem.classList.remove('correcta', 'incorrecta');
      });
      resultadoElem.textContent = '';
      siguienteBtn.style.display = 'none';
    }
  
    function seleccionarRespuesta(index) {
      const pregunta = preguntas[preguntaActual];
      opcionesElem.querySelectorAll('.opcion').forEach((opcionElem, i) => {
        if (i === pregunta.respuestaCorrecta) {
          opcionElem.classList.add('correcta');
        } else {
          opcionElem.classList.add('incorrecta');
        }
        opcionElem.disabled = true;
      });
      if (index === pregunta.respuestaCorrecta) {
        puntaje++;
        resultadoElem.textContent = '¡Correcto!';
      } else {
        resultadoElem.textContent = 'Incorrecto. La respuesta correcta es ' + pregunta.opciones[pregunta.respuestaCorrecta] + '.';
      }
      siguienteBtn.style.display = 'inline-block';
    }
  
    function siguientePregunta() {
      preguntaActual++;
      if (preguntaActual < preguntas.length) {
        mostrarPregunta();
      } else {
        mostrarResultadoFinal();
      }
    }
  
    function mostrarResultadoFinal() {
      preguntaElem.textContent = '¡Has completado el juego!';
      opcionesElem.innerHTML = '';
      resultadoElem.textContent = 'Tu puntaje es: ' + puntaje + ' de ' + preguntas.length;
      siguienteBtn.style.display = 'none';
      resetBtn.style.display = 'inline-block';
    }
  
    function reiniciarJuego() {
      preguntaActual = 0;
      puntaje = 0;
      resetBtn.style.display = 'none';
      mostrarPregunta();
    }
  
    opcionesElem.querySelectorAll('.opcion').forEach((opcionElem, index) => {
      opcionElem.addEventListener('click', () => seleccionarRespuesta(index));
    });
  
    siguienteBtn.addEventListener('click', siguientePregunta);
    resetBtn.addEventListener('click', reiniciarJuego);
  
    reiniciarJuego();
  });
  
  