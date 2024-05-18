document.addEventListener('DOMContentLoaded', function() {
  const wordItems = document.querySelectorAll('.word-item');
  const imageItems = document.querySelectorAll('.image-item');
  const scoreDisplay = document.getElementById('score');
  const submitButton = document.getElementById('submit-score');
  let selectedWord = null;
  let selectedImage = null;
  let score = 0;
  let attempts = 0;

  wordItems.forEach(wordItem => {
    wordItem.addEventListener('click', function() {
      resetOpacity(wordItems);
      selectedWord = this;
      this.style.opacity = '1';
      checkMatch();
    });
  });

  imageItems.forEach(imageItem => {
    imageItem.addEventListener('click', function() {
      resetOpacity(imageItems);
      selectedImage = this;
      this.style.opacity = '1';
      checkMatch();
    });
  });

  function resetOpacity(items) {
    items.forEach(item => {
      item.style.opacity = '0.5';
      item.classList.remove('correct', 'incorrect');
    });
  }

  function checkMatch() {
    if (selectedWord && selectedImage) {
      if (selectedWord.getAttribute('data-word') === selectedImage.getAttribute('data-word')) {
        selectedWord.classList.add('correct');
        selectedImage.classList.add('correct');
        score++;
      } else {
        selectedWord.classList.add('incorrect');
        selectedImage.classList.add('incorrect');
      }
      attempts++;
      if (attempts === wordItems.length) {
        submitButton.style.display = 'block';
      }
      setTimeout(resetSelection, 1000);
    }
  }

  function resetSelection() {
    selectedWord = null;
    selectedImage = null;
    resetOpacity(wordItems);
    resetOpacity(imageItems);
  }

  submitButton.addEventListener('click', function() {
    scoreDisplay.textContent = `${score} de ${wordItems.length}`;
    submitButton.style.display = 'none';
  });
});
