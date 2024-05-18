<?php
session_start();

$intentos = $_SESSION["intentos_mate_q3"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <title>Actividad para Niños</title>
    <link rel="stylesheet" href="4estilo.css">
</head>

<body>
    <div class="container">
        <h1>CONTEMOS LOS ELEMENTOS</h1>
        <p>Tienes <?php echo $intentos - 1 ?> intentos de 2 válidos!</p>
        <form id="activityForm" action="../registros.php" method="POST">
            <div class="grid-container">
                <div class="question">
                    <img src="img/1.jpg" alt="Imagen 1">
                    <label for="image1">¿Cuántos objetos hay?</label>
                    <input type="number" id="image1" name="image1">
                </div>
                <div class="question">
                    <img src="img/2.png" alt="Imagen 2">
                    <label for="image2">¿Cuántos objetos hay?</label>
                    <input type="number" id="image2" name="image2">
                </div>
                <div class="question">
                    <img src="img/3.jpg" alt="Imagen 3">
                    <label for="image3">¿Cuántos objetos hay?</label>
                    <input type="number" id="image3" name="image3">
                </div>
                <div class="question">
                    <img src="img/4.jpg" alt="Imagen 4">
                    <label for="image4">¿Cuántos objetos hay?</label>
                    <input type="number" id="image4" name="image4">
                </div>
                <div class="question">
                    <img src="img/5.jpg" alt="Imagen 5">
                    <label for="image5">¿Cuántos objetos hay?</label>
                    <input type="number" id="image5" name="image5">
                </div>
                <div class="question">
                    <img src="img/6.jpg" alt="Imagen 6">
                    <label for="image6">¿Cuántos objetos hay?</label>
                    <input type="number" id="image6" name="image6">
                </div>
                <div class="question">
                    <img src="img/7.jpeg" alt="Imagen 7">
                    <label for="image7">¿Cuántos objetos hay?</label>
                    <input type="number" id="image7" name="image7">
                </div>
                <div class="question">
                    <img src="img/8.jpg" alt="Imagen 8">
                    <label for="image8">¿Cuántos objetos hay?</label>
                    <input type="number" id="image8" name="image8">
                </div>
                <div class="question">
                    <img src="img/9.jpg" alt="Imagen 9">
                    <label for="image9">¿Cuántos objetos hay?</label>
                    <input type="number" id="image9" name="image9">
                </div>
            </div>
            <input type="hidden" name="calificacionQ3" id="calificacionQ3" value="">
            <button type="button" onclick="evaluateAnswers()">Enviar</button>

        </form>
        <div id="result"></div>
    </div>
    <script src="4.js"></script>
</body>

</html>