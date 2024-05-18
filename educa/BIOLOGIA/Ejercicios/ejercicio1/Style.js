document.addEventListener('DOMContentLoaded', function() {
  const memoryGame = document.getElementById('memory-game');
  const scoreValue = document.getElementById('score-value');

  
  const symbols = ['🐶', '🐱', '🦁', '🐘', '🦒', '🐵'];
  let flippedCards = [];
  let matchedPairs = 0;
  let score = 0;

  
  const cards = [...symbols, ...symbols];

  
  function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
  }

  
  function initGame() {
    flippedCards = [];
    matchedPairs = 0;
    score = 0;
    updateScore();
    memoryGame.innerHTML = '';
    shuffle(cards).forEach(symbol => {
      const card = document.createElement('div');
      card.classList.add('card');
      card.dataset.symbol = symbol;
      card.textContent = symbol;
      card.addEventListener('click', flipCard);
      memoryGame.appendChild(card);
    });
  }

  
  function flipCard() {
    if (flippedCards.length < 2 && !this.classList.contains('flipped')) {
      this.classList.add('flipped');
      flippedCards.push(this);
    }

    if (flippedCards.length === 2) {
      setTimeout(checkMatch, 800);
    }
  }

  
  function checkMatch() {
    const [card1, card2] = flippedCards;
    if (card1.dataset.symbol === card2.dataset.symbol) {
      card1.removeEventListener('click', flipCard);
      card2.removeEventListener('click', flipCard);
      matchedPairs++;
      score += 10;
      updateScore();
      if (matchedPairs === symbols.length) {
        endGame();
      }
    } else {
      card1.classList.remove('flipped');
      card2.classList.remove('flipped');
    }
    flippedCards = [];
  }

  
  function updateScore() {
    scoreValue.textContent = score;
  }

  
  function endGame() {
    alert('¡Felicidades! Has completado el juego con una puntuación de ' + score);
  }

  
  initGame();
});







  
  