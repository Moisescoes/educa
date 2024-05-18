document.addEventListener('DOMContentLoaded', function() {
  const animales = document.querySelectorAll('.animal');
  const categorias = document.querySelectorAll('.categoria');
  const puntuacion = document.getElementById('puntuacion');

  let animalArrastrado = null;
  let puntaje = 0;

  animales.forEach(animal => {
    animal.addEventListener('dragstart', arrastrarInicio);
    animal.addEventListener('dragend', arrastrarFin);
  });

  categorias.forEach(categoria => {
    categoria.addEventListener('dragover', arrastrarSobre);
    categoria.addEventListener('dragenter', arrastrarEntrar);
    categoria.addEventListener('dragleave', arrastrarSalir);
    categoria.addEventListener('drop', soltar);
  });

  function arrastrarInicio() {
    animalArrastrado = this;
    setTimeout(() => (this.style.display = 'none'), 0);
  }

  function arrastrarFin() {
    animalArrastrado = null;
    setTimeout(() => (this.style.display = 'block'), 0);
  }

  function arrastrarSobre(e) {
    e.preventDefault();
  }

  function arrastrarEntrar(e) {
    e.preventDefault();
    this.style.backgroundColor = '#cce6ff'; 
  }

  function arrastrarSalir() {
    this.style.backgroundColor = '#b3e0ff'; 
  }

  function soltar() {
    this.appendChild(animalArrastrado);
    this.style.backgroundColor = '#b3e0ff'; 
    if (this.id === animalArrastrado.dataset.categoria) {
      puntaje += 10;
      puntuacion.textContent = puntaje;
    }
    if (puntaje >= 40) { 
      finalizarJuego();
    }
  }

  function finalizarJuego() {
    alert('¡Felicidades! Has completado el juego con una puntuación de ' + puntaje);
    
  }
});


