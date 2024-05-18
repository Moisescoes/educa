<?php
$conn = crearConexion();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$id_maestro = $_SESSION["id_maestro"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["asignar"])) {

    //Verificar que los campos no estan vacios
    if (
        !empty($_POST["fecha_limite"]) && !empty($_POST["id_alumno"]) && !empty($_POST["id_quiz"])
    ) {
        $fecha_limite = $_POST["fecha_limite"];
        $score = 0;
        $id_alumno = $_POST["id_alumno"];
        $id_quiz = $_POST["id_quiz"];

        //Escapar los valores para evitar inyeccion SQL
        $fecha_limite = mysqli_real_escape_string($conn, $fecha_limite);
        $id_alumno = mysqli_real_escape_string($conn, $id_alumno);
        $id_quiz = mysqli_real_escape_string($conn, $id_quiz);

        //Verificar si los datos del usuario ya estan registrados
        if (existeAsignacion($conn, $id_quiz, $id_alumno) == false) {
            $sql = "INSERT INTO asignaciones (fecha_limite, score, id_alumno, id_maestro, id_quiz, intentos)
        VALUES ('$fecha_limite', '$score', '$id_alumno', '$id_maestro', '$id_quiz', 1)";
            if ($conn->query($sql) == TRUE) {
                $asunto = "Tutorado tiene una nueva actividad";
                $cuerpo = "A su tutorado se le ha asignado una nueva actividad en plataforma, por favor brindele acceso a Educa";
                $id_tutor = retornaIdTutor($conn, $id_alumno);
                $email_tutor = retornamailTutor($conn, $id_tutor);
                enviarCorreo($email_tutor, $asunto, $cuerpo);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo '<div style="text-align-last: center;" class="form-floating mb-3">
        <p style="background-color: red; color:black;">Asignación ya registrada</p>
    </div>';
        }
    } else {
        echo '<div style="text-align-last: center;" class="form-floating mb-3">
    <p style="background-color: red; color:black;">Todos los campos son obligatorios</p>
</div>';
    }
}

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarCorreo($destinatario, $asunto, $cuerpo)
{
    $phpmailer = new PHPMailer();

    try {
        // Configuración del servidor SMTP
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.office365.com'; // Servidor SMTP de Outlook
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'beltranrojoalexss@outlook.com'; // Tu dirección de correo de Outlook
        $phpmailer->Password = 'EUROzur.041104'; // Tu contraseña de Outlook
        $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $phpmailer->Port = 587;

        // Remitente y destinatario
        $phpmailer->setFrom(('beltranrojoalexss@outlook.com'), 'Control Parental');
        $phpmailer->addAddress($destinatario);

        // Contenido del correo
        $phpmailer->isHTML(true);
        $phpmailer->Subject = $asunto;
        $phpmailer->Body    = $cuerpo;

        $phpmailer->send();
        echo 'El mensaje ha sido enviado';
    } catch (Exception $e) {
        echo "El mensaje no se pudo enviar. Error de PHPMailer: {$phpmailer->ErrorInfo}";
    }
}

function existeAsignacion($conn, $id_quiz, $id_alumno)
{
    $sql = "SELECT * FROM asignaciones WHERE id_quiz=$id_quiz AND id_alumno=$id_alumno";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function existeProfesor($conn, $username_maestro)
{
    $sql = "SELECT * FROM maestros WHERE username='$username_maestro'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function retornaIdTutor($conn, $id_alumno)
{
    // Preparar la consulta SQL para seleccionar el campo 'id'
    $sql = "SELECT id_tutor FROM alumnos WHERE id='$id_alumno'";
    $result = $conn->query($sql);

    // Verificar si se obtuvo algún resultado
    if ($result->num_rows > 0) {
        // Obtener la fila de resultados
        $row = $result->fetch_assoc();
        // Retornar el ID del tutor como entero
        return (int)$row['id_tutor'];
    } else {
        // Si no se encontró ningún resultado, retornar false
        return 0;
    }
}

function retornamailTutor($conn, $id_tutor)
{
    // Preparar la consulta SQL para seleccionar el campo 'id'
    $sql = "SELECT email FROM tutores WHERE id='$id_tutor'";
    $result = $conn->query($sql);

    // Verificar si se obtuvo algún resultado
    if ($result->num_rows > 0) {
        // Obtener la fila de resultados
        $row = $result->fetch_assoc();
        // Retornar el ID del tutor como entero
        return (int)$row['email'];
    } else {
        // Si no se encontró ningún resultado, retornar false
        return 0;
    }
}

cerrarConexion($conn);
