<?php
session_start();
$intentos = $_SESSION["intentos_mate_q4"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recta Numérica</title>
  <link rel="icon" type="image/x-icon" href="img/icon.png" />
  <link rel="stylesheet" href="8.css">
</head>

<body>
  <header>
    <h1>Completa la Recta Numérica</h1>
  </header>
  <p>Tienes <?php echo $intentos - 1 ?> intentos de 2 válidos!</p>
  <div class="number-line">
    <div class="number-point">-10</div>
    <input type="number" class="number-input">
    <input type="number" class="number-input">
    <input type="number" class="number-input">
    <input type="number" class="number-input">
    <div class="number-point">0</div>
    <input type="number" class="number-input">
    <input type="number" class="number-input">
    <input type="number" class="number-input">
    <input type="number" class="number-input">
    <div class="number-point">10</div>
  </div>
  <form id="evaluacionForm" action="../registros.php" method="POST">
    <!-- Campo oculto para enviar el resultado de la evaluación -->
    <input type="hidden" id="calificacionQ4" name="calificacionQ4" value="">
    <button type="button" onclick="checkAnswers()">Verificar Respuestas</button>
  </form>

  <div id="result"></div>

  <!-- Incluir el archivo JavaScript -->
  <script src="8.js"></script>
</body>

</html>