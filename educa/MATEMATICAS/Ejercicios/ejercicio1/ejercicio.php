<?php
session_start();
$intentos = $_SESSION["intentos_mate_q1"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="quiz-container">
        <h1>¡¡SELECCIONA LA OPCIÓN CORRECTA!!</h1>
        <p>Tienes <?php echo $intentos - 1 ?> intentos de 2 válidos!</p>
        <form id="quiz-form" action="../registros.php" method="POST">
            <!-- Pregunta 1 -->
            <div class="question">
                <p>1. ¿Cuál es la suma de <img class="question-img" src="img/7manzanas.png" alt="7"> y <img class="question-img" src="img/5manzanas.jpg" alt="5">?</p>
                <label>
                    <input type="radio" name="question1" value="10"> 10
                </label><br>
                <label>
                    <input type="radio" name="question1" value="11"> 11
                </label><br>
                <label>
                    <input type="radio" name="question1" value="12"> 12
                </label><br>
                <label>
                    <input type="radio" name="question1" value="13"> 13
                </label>
            </div>
            <!-- Pregunta 2 -->
            <div class="question">
                <p>2. ¿Cuál es el producto de <img class="question-img" src="img/3dulces.png" alt="3"> y <img class="question-img" src="img/4dulces.png" alt="4">?</p>
                <label>
                    <input type="radio" name="question2" value="11"> 11
                </label><br>
                <label>
                    <input type="radio" name="question2" value="12"> 12
                </label><br>
                <label>
                    <input type="radio" name="question2" value="13"> 13
                </label><br>
                <label>
                    <input type="radio" name="question2" value="14"> 14
                </label>
            </div>
            <!-- Pregunta 3 -->
            <div class="question">
                <p>3. ¿Cuál es la resta de <img class="question-img" src="img/15platanos.jpeg" alt="15"> menos <img class="question-img" src="img/8platanos.jpeg" alt="8">?</p>
                <label>
                    <input type="radio" name="question3" value="6"> 6
                </label><br>
                <label>
                    <input type="radio" name="question3" value="7"> 7
                </label><br>
                <label>
                    <input type="radio" name="question3" value="8"> 8
                </label><br>
                <label>
                    <input type="radio" name="question3" value="9"> 9
                </label>
            </div>
            <!-- Pregunta 4 -->
            <div class="question">
                <p>4. ¿Cuantos huevos hay <img class="question-img" src="img/6huevos.png" alt="Huevos">?</p>
                <label>
                    <input type="radio" name="question4" value="5"> 5
                </label><br>
                <label>
                    <input type="radio" name="question4" value="6"> 6
                </label><br>
                <label>
                    <input type="radio" name="question4" value="7"> 7
                </label><br>
                <label>
                    <input type="radio" name="question4" value="8"> 8
                </label>
            </div>
            <!-- Pregunta 5 -->
            <div class="question">
                <p>5. ¿Cuál es el valor de <img class="question-img" src="img/9pelotas.png" alt="9"> + <img class="question-img" src="img/9pelotas.png" alt="9">?</p>
                <label>
                    <input type="radio" name="question5" value="18"> 18
                </label><br>
                <label>
                    <input type="radio" name="question5" value="14"> 14
                </label><br>
                <label>
                    <input type="radio" name="question5" value="12"> 12
                </label><br>
                <label>
                    <input type="radio" name="question5" value="8"> 8
                </label>
            </div>
            <!-- Pregunta 6 -->
            <div class="question">
                <p>6. ¿Cuál es la mitad de <img class="question-img" src="img/20.png" alt="20">?</p>
                <label>
                    <input type="radio" name="question6" value="10"> 10
                </label><br>
                <label>
                    <input type="radio" name="question6" value="11"> 11
                </label><br>
                <label>
                    <input type="radio" name="question6" value="12"> 12
                </label><br>
                <label>
                    <input type="radio" name="question6" value="13"> 13
                </label>
            </div>
            <!-- Pregunta 7 -->
            <div class="question">
                <p>7. ¿Cuál es el resultado de <img class="question-img" src="img/5Clasiscs.png" alt="5"> + <img class="question-img" src="img/9aliens.png" alt="9"> - <img class="question-img" src="img/3num.png" alt="3">?</p>
                <label>
                    <input type="radio" name="question7" value="10"> 10
                </label><br>
                <label>
                    <input type="radio" name="question7" value="11"> 11
                </label><br>
                <label>
                    <input type="radio" name="question7" value="12"> 12
                </label><br>
                <label>
                    <input type="radio" name="question7" value="13"> 13
                </label>
            </div>
            <!-- Pregunta 8 -->
            <div class="question">
                <p>8. Si tienes <img class="question-img" src="img/3man.png" alt="3"> manzanas y te dan <img class="question-img" src="img/4man.png" alt="4"> más, ¿cuántas manzanas tienes en total?</p>
                <label>
                    <input type="radio" name="question8" value="6"> 6
                </label><br>
                <label>
                    <input type="radio" name="question8" value="7"> 7
                </label><br>
                <label>
                    <input type="radio" name="question8" value="8"> 8
                </label><br>
                <label>
                    <input type="radio" name="question8" value="9"> 9
                </label>
            </div>
            <!-- Pregunta 9 -->
            <div class="question">
                <p>9. ¿Cuál es el siguiente número en la serie: 2, 4, 6, 8, ...?</p>
                <label>
                    <input type="radio" name="question9" value="9"> 9
                </label><br>
                <label>
                    <input type="radio" name="question9" value="10"> 10
                </label><br>
                <label>
                    <input type="radio" name="question9" value="11"> 11
                </label><br>
                <label>
                    <input type="radio" name="question9" value="12"> 12
                </label>
            </div>
            <!-- Pregunta 10 -->
            <div class="question">
                <p>10. ¿Cuál es la fracción equivalente a 1/2?</p>
                <label>
                    <input type="radio" name="question10" value="2/4"> 2/4
                </label><br>
                <label>
                    <input type="radio" name="question10" value="2/3"> 2/3
                </label><br>
                <label>
                    <input type="radio" name="question10" value="3/4"> 3/4
                </label><br>
                <label>
                    <input type="radio" name="question10" value="4/5"> 4/5
                </label>
            </div>

            <button type="button" onclick="checkAnswers()">Enviar</button>
            <input type="hidden" name="calificacionQ1" id="calificacionQ1" value="">
        </form>
        <div id="result"></div>
    </div>

    <script src="ejscript.js"></script>
</body>

</html>