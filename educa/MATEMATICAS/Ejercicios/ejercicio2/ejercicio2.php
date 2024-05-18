<?php
session_start();
$intentos = $_SESSION["intentos_mate_q2"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relaciona</title>
  <p>Tienes <?php echo $intentos - 1 ?> intentos de 2 válidos!</p>
  <link rel="icon" type="image/x-icon" href="icon.png" />
  <link rel="stylesheet" href="2estilo.css">
</head>

<body>
  <header>
    <h2>RELACIONA LAS COLUMNAS</h2>
  </header>
  <div class="exercise-container">
    <div class="column">
      <h2>Operaciones</h2>
      <ul id="operations-list"></ul>
    </div>
    <div class="column">
      <h2>Resultados</h2>
      <ul id="results-list"></ul>
    </div>
  </div>
  <form id="quiz-form" action="../registros.php" method="POST">
    <input type="hidden" name="calificacionQ2" id="calificacionQ2" value="">
    <button type="button" id="check-button" onclick="checkAnswers()">Verificar Respuestas</button>
  </form>
  <p id="result"></p>
  <button id="retry-button" style="display: none;" onclick="retry()">Intentar de Nuevo</button>

  <script src="2.js"></script>
</body>

</html>
