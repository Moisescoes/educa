<?php
session_start();
$intentos = $_SESSION["intentos_español_q1"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juego de Sinónimos</title>
  <link rel="stylesheet" href="ejer.css">
</head>

<body>
  <div class="container">
    <h1>Juego de Sinónimos</h1>

    <p>Tienes <?php echo $intentos - 1 ?> intentos de 2 válidos!</p>
    <div id="word-container">
    </div>
    <br>
    <button id="check-btn">Comprobar Respuesta</button>
    <p id="result"></p>
    <p id="score">Puntuación: <span id="score-value">0</span></p>
    <!-- Formulario para enviar los resultados -->
    <form id="score-form" action="../registros.php" method="post">
      <input type="hidden" name="calificacionQ1" id="hidden-score" value="">
      <button type="submit">Enviar Puntuación</button>
    </form>

  </div>
  <script src="Style.js"></script>
</body>

</html>