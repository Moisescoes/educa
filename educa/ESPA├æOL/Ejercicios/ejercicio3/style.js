document.addEventListener('DOMContentLoaded', function() {
  const memoryGame = document.getElementById('memory-game');
  const restartBtn = document.getElementById('restart-btn');
  const scoreValue = document.getElementById('score-value');

  const symbols = ['🍎', '🍊', '🍇', '🥝', '🍌', '🍉', '🍓', '🍒'];
  let flippedCards = [];
  let matchedCards = [];
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
    matchedCards = [];
    score = 0;
    scoreValue.textContent = score;
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
      matchedCards.push(card1, card2);
      score += 10;
      scoreValue.textContent = score;
      if (matchedCards.length === cards.length) {
        alert('¡Felicidades! ¡Has ganado!');
      }
    } else {
      card1.classList.remove('flipped');
      card2.classList.remove('flipped');
    }
    flippedCards = [];
  }


  initGame();


  restartBtn.addEventListener('click', initGame);
});




  