<?php
include("./controller/conexion.php");
$conn = crearConexion();

// Operación CREATE (Agregar un nuevo padre - alumno)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar_usuarios"])) {

    //Verificar que los campos no estan vacios
    if (
        !empty($_POST["nombre_tutor"]) && !empty($_POST["apellido_tutor"])
        && !empty($_POST["email_tutor"]) && !empty($_POST["username_tutor"])
        && !empty($_POST["password_tutor"]) && !empty($_POST["nombre_alumno"])
        && !empty($_POST["apellido_alumno"])

    ) {
        $nombre_alumno = $_POST["nombre_alumno"];
        $apellido_alumno = $_POST["apellido_alumno"];

        $nombre_tutor = $_POST["nombre_tutor"];
        $apellido_tutor = $_POST["apellido_tutor"];
        $email_tutor = $_POST["email_tutor"];
        $username_tutor = $_POST["username_tutor"];
        $password_tutor = $_POST["password_tutor"];

        $id_maestro = $_POST["id_maestro"];

        //Escapar los valores para evitar inyeccion SQL
        $nombre_alumno = mysqli_real_escape_string($conn, $nombre_alumno);
        $apellido_alumno = mysqli_real_escape_string($conn, $apellido_alumno);

        $nombre_tutor = mysqli_real_escape_string($conn, $nombre_tutor);
        $apellido_tutor = mysqli_real_escape_string($conn, $apellido_tutor);
        $email_tutor = mysqli_real_escape_string($conn, $email_tutor);
        $username_tutor = mysqli_real_escape_string($conn, $username_tutor);
        $password_tutor = mysqli_real_escape_string($conn, $password_tutor);

        $id_maestro = mysqli_real_escape_string($conn, $id_maestro);

        // Hashear la contraseña antes de almacenarla en la base de datos
        $hashed_password_tutor = password_hash($password_tutor, PASSWORD_DEFAULT);

        //Verificar si los datos del usuario ya estan registrados
        if (existeUsuarioOCorreo($conn, $username_tutor, $email_tutor) == false) {
            if (existeTutor($conn, $email_tutor, $username_tutor) == false) {
                if (existeAlumno($conn, $nombre_alumno, $apellido_alumno) == false) {
                    if (existeProfesorPorID($conn, $id_maestro) == true) {
                        $sql = "INSERT INTO tutores (nombre, apellido, email, username, password)
            VALUES ('$nombre_tutor', '$apellido_tutor', '$email_tutor', '$username_tutor', '$hashed_password_tutor')";
                        if ($conn->query($sql) == TRUE) {
                            $idTutor = retornaIdTutor($conn, $username_tutor);
                            $sql = "INSERT INTO alumnos (nombre, apellido, id_tutor, id_maestro)
            VALUES ('$nombre_alumno', '$apellido_alumno', $idTutor, $id_maestro)";
                            if ($conn->query($sql) == TRUE) {
                                header("Location: ./index.php");
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    } else {
                        echo '<div style="text-align-last: center;" class="form-floating mb-3">
                        <p style="background-color: red; color:black;">Ese profesor no existe</p>
                    </div>';
                    }
                } else {
                    echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Ese alumno ya está registrado</p>
            </div>';
                }
            } else {
                echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Ese tutor ya está registrado</p>
            </div>';
            }
        } else {
            echo '<div style="text-align-last: center;" class="form-floating mb-3">
            <p style="background-color: red; color:black;">Nombre o email ya registrado</p>
        </div>';
        }
    } else {
        echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Todos los campos son obligatorios</p>
            </div>';
    }
}

// Operación CREATE (Agregar un nuevo profesor)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar_maestro"])) {

    //Verificar que los campos no estan vacios
    if (
        !empty($_POST["nombre_maestro"]) && !empty($_POST["apellido_maestro"]) && !empty($_POST["email_maestro"])
        && !empty($_POST["username_maestro"]) && !empty($_POST["password_maestro"])
    ) {
        $nombre_maestro = $_POST["nombre_maestro"];
        $apellido_maestro = $_POST["apellido_maestro"];
        $email_maestro = $_POST["email_maestro"];
        $username_maestro = $_POST["username_maestro"];
        $password_maestro = $_POST["password_maestro"];

        //Escapar los valores para evitar inyeccion SQL
        $nombre_maestro = mysqli_real_escape_string($conn, $nombre_maestro);
        $apellido_maestro = mysqli_real_escape_string($conn, $apellido_maestro);
        $email_maestro = mysqli_real_escape_string($conn, $email_maestro);
        $username_maestro = mysqli_real_escape_string($conn, $username_maestro);
        $password_maestro = mysqli_real_escape_string($conn, $password_maestro);

        // Hashear la contraseña antes de almacenarla en la base de datos
        $hashed_password_maestro = password_hash($password_maestro, PASSWORD_DEFAULT);

        //Verificar si los datos del usuario ya estan registrados
        if (existeUsuarioOCorreo($conn, $username_maestro, $email_maestro) == false) {
            if (existeProfesor($conn, $username_maestro) == false) {
                $sql = "INSERT INTO maestros (nombre, apellido, email, username, password)
            VALUES ('$nombre_maestro', '$apellido_maestro', '$email_maestro', '$username_maestro', '$hashed_password_maestro')";
                if ($conn->query($sql) == TRUE) {
                    header("Location: ./index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Ese nombre de usuario ya está en uso</p>
            </div>';
            }
        } else {
            echo '<div style="text-align-last: center;" class="form-floating mb-3">
            <p style="background-color: red; color:black;">Usuario o email ya registrado</p>
        </div>';
        }
    } else {
        echo '<div style="text-align-last: center;" class="form-floating mb-3">
        <p style="background-color: red; color:black;">Todos los campos son obligatorios</p>
    </div>';
    }
}

function existeTutor($conn, $email, $username)
{
    $sql = "SELECT * FROM tutores WHERE email='$email' OR username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function existeAlumno($conn, $nombre, $apellido)
{
    $sql = "SELECT * FROM alumnos WHERE nombre='$nombre' AND apellido='$apellido'";
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

function existeProfesorPorID($conn, $id_maestro)
{
    $sql = "SELECT * FROM maestros WHERE id=$id_maestro";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function existeProfesorPorUsername($conn, $username_profesor)
{
    $sql = "SELECT * FROM maestros WHERE username='$username_profesor'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function retornaIdTutor($conn, $username_tutor)
{
    // Preparar la consulta SQL para seleccionar el campo 'id'
    $sql = "SELECT id FROM tutores WHERE username='$username_tutor'";
    $result = $conn->query($sql);

    // Verificar si se obtuvo algún resultado
    if ($result->num_rows > 0) {
        // Obtener la fila de resultados
        $row = $result->fetch_assoc();
        // Retornar el ID del tutor como entero
        return (int)$row['id'];
    } else {
        // Si no se encontró ningún resultado, retornar false
        return 0;
    }
}

function existeUsuarioOCorreo($conn, $username, $email)
{
    $sql = "SELECT * FROM maestros WHERE username='$username' OR email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        $sql = "SELECT * FROM tutores WHERE username='$username' OR email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}


cerrarConexion($conn);
