document.addEventListener("DOMContentLoaded", function () {
  const operations = [
    "3 + 4",
    "8 - 5",
    "6 × 2",
    "10 ÷ 2",
    "5 + 7",
    "9 - 3",
    "4 × 3",
    "15 ÷ 3",
    "6 + 9",
    "12 - 7",
  ];

  const results = ["7", "3", "12", "5", "12", "6", "12", "5", "15", "5"];

  const columnA = document.getElementById("operations-list");
  const columnB = document.getElementById("results-list");

  operations.forEach((operation, index) => {
    const listItem = document.createElement("li");
    listItem.textContent = operation;
    listItem.setAttribute("data-result", results[index]);
    listItem.addEventListener("click", selectOperation);
    columnA.appendChild(listItem);
  });

  results.sort(() => Math.random() - 0.5).forEach((result) => {
    const listItem = document.createElement("li");
    listItem.textContent = result;
    listItem.setAttribute("data-result", result);
    listItem.addEventListener("click", selectResult);
    columnB.appendChild(listItem);
  });
});

let selectedOperation = null;

function selectOperation(event) {
  const clickedOperation = event.target;
  if (selectedOperation) {
    selectedOperation.classList.remove("selected");
  }
  clickedOperation.classList.add("selected");
  selectedOperation = clickedOperation;
}

function selectResult(event) {
  const clickedResult = event.target;
  if (selectedOperation) {
    const operationResult = selectedOperation.getAttribute("data-result");
    const clickedResultValue = clickedResult.getAttribute("data-result");
    if (operationResult === clickedResultValue) {
      selectedOperation.classList.remove("selected");
      selectedOperation.classList.add("correct");
      clickedResult.classList.add("correct");
    } else {
      selectedOperation.classList.remove("selected");
      selectedOperation.classList.add("incorrect");
      clickedResult.classList.add("incorrect");
    }
    selectedOperation = null;
  }
}

function checkAnswers() {
  const operationsListItems = document.querySelectorAll("#operations-list li");
  let correctCount = 0;

  operationsListItems.forEach((operationItem) => {
    if (operationItem.classList.contains("correct")) {
      correctCount++;
    }
  });

  const totalQuestions = operationsListItems.length;
  const scoreMessage = `Respuestas correctas: ${correctCount} / ${totalQuestions}`;
  document.getElementById("result").innerHTML = scoreMessage;
  document.getElementById("result").style.color = correctCount === totalQuestions ? "green" : "red";
  document.getElementById("retry-button").style.display = correctCount === totalQuestions ? "none" : "block";

  // Set the hidden field value and submit the form
  document.getElementById("calificacionQ2").value = correctCount;

  // Ensure the form is submitted
  document.getElementById("quiz-form").submit();
}

function retry() {
  const operationsListItems = document.querySelectorAll("#operations-list li");
  const resultsListItems = document.querySelectorAll("#results-list li");

  operationsListItems.forEach((operationItem) => {
    operationItem.classList.remove("correct", "incorrect");
  });

  resultsListItems.forEach((resultItem) => {
    resultItem.classList.remove("correct", "incorrect");
  });

  document.getElementById("result").textContent = "";
  document.getElementById("retry-button").style.display = "none";
}
