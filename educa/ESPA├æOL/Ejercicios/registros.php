<?php
include("/wamp64/www/educa/controller/conexion.php");
$conn = crearConexion();
session_start(); // Iniciar la sesión al comienzo del script



$id_alumno = $_SESSION["id_alumno"];


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calificacionQ1"])) {
    // Obtener la calificación enviada mediante POST
    $calificacion = isset($_POST["calificacionQ1"]) ? (int)$_POST["calificacionQ1"] : 0;
    $score_actual = retornaScore($conn, $id_alumno, 5);
    $intentos_actual = retornaIntentos($conn, $id_alumno, 5);
    $intento_nuevo = $intentos_actual + 1;

    if ($calificacion > $score_actual) {

        $sql = "UPDATE asignaciones SET score='$calificacion' WHERE id_alumno='$id_alumno' && id_quiz=5";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error al actualizar los datos: " . $conn->error;
        }
    }


    $sql = "UPDATE asignaciones SET intentos='$intento_nuevo' WHERE id_alumno='$id_alumno' && id_quiz=5";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $_SESSION["intentos_español_q1"] += 1;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calificacionQ2"])) {
    // Obtener la calificación enviada mediante POST
    $calificacion = isset($_POST["calificacionQ2"]) ? (int)$_POST["calificacionQ2"] : 0;
    $score_actual = retornaScore($conn, $id_alumno, 6);
    $intentos_actual = retornaIntentos($conn, $id_alumno, 6);
    $intento_nuevo = $intentos_actual + 1;

    if ($calificacion > $score_actual) {

        $sql = "UPDATE asignaciones SET score='$calificacion' WHERE id_alumno='$id_alumno' && id_quiz=6";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error al actualizar los datos: " . $conn->error;
        }
    }


    $sql = "UPDATE asignaciones SET intentos='$intento_nuevo' WHERE id_alumno='$id_alumno' && id_quiz=6";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
    $_SESSION["intentos_español_q2"] += 1;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calificacionQ3"])) {
    // Obtener la calificación enviada mediante POST
    $calificacion = isset($_POST["calificacionQ3"]) ? (int)$_POST["calificacionQ3"] : 0;
    $score_actual = retornaScore($conn, $id_alumno, 7);
    $intentos_actual = retornaIntentos($conn, $id_alumno, 7);
    $intento_nuevo = $intentos_actual + 1;

    if ($calificacion > $score_actual) {

        $sql = "UPDATE asignaciones SET score='$calificacion' WHERE id_alumno='$id_alumno' && id_quiz=7";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error al actualizar los datos: " . $conn->error;
        }
    }


    $sql = "UPDATE asignaciones SET intentos='$intento_nuevo' WHERE id_alumno='$id_alumno' && id_quiz=7";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }


    $_SESSION["intentos_español_q3"] += 1;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calificacionQ4"])) {
    // Obtener la calificación enviada mediante POST
    $calificacion = isset($_POST["calificacionQ4"]) ? (int)$_POST["calificacionQ4"] : 0;
    $score_actual = retornaScore($conn, $id_alumno, 8);
    $intentos_actual = retornaIntentos($conn, $id_alumno, 8);
    $intento_nuevo = $intentos_actual + 1;

    if ($calificacion > $score_actual) {

        $sql = "UPDATE asignaciones SET score='$calificacion' WHERE id_alumno='$id_alumno' && id_quiz=8";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error al actualizar los datos: " . $conn->error;
        }
    }


    $sql = "UPDATE asignaciones SET intentos='$intento_nuevo' WHERE id_alumno='$id_alumno' && id_quiz=8";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $_SESSION["intentos_español_q4"] += 1;
}

function retornaScore($conn, $id_alumno, $id_quiz)
{
    $result = $conn->query("SELECT score FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=$id_quiz");
    if ($result) {
        $row = $result->fetch_assoc();
        if ($row) {
            $score = (int)$row['score']; // Convertir el resultado a entero
            return $score;
        } else {
            return null;
        }
    }
}

function retornaIntentos($conn, $id_alumno, $id_quiz)
{
    $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=$id_quiz");
    if ($result) {
        $row = $result->fetch_assoc();
        if ($row) {
            $intentos = (int)$row['intentos']; // Convertir el resultado a entero
            return $intentos;
        } else {
            return null;
        }
    }
}

// Pausar la ejecución por 5 segundos
sleep(5);
header("Location:../español.php");

cerrarConexion($conn);
