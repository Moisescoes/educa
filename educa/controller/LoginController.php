<?php
include("./controller/conexion.php");
$conn = crearConexion();
//Operacion LOGIN
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    // Verifica si una sesión ya está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    //Verificar que los campos no estan vacios
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        //Escapar los valores para evitar inyeccion SQL
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);


        $sql = "SELECT * FROM tutores WHERE username='$username' OR email='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                $id_tutor = $row["id"];
                $alumno = obtenerAlumnoPorIdTutor($conn, $id_tutor);

                $_SESSION["id_tutor"] = $id_tutor;
                $_SESSION["nombre_tutor"] = $row["nombre"];
                $_SESSION["apellido_tutor"] = $row["apellido"];
                $_SESSION["email_tutor"] = $row["email"];
                $_SESSION["username_tutor"] = $row["username"];
                $_SESSION["id_maestro_tutor"] = $row["id_maestro"];

                if ($alumno !== null) {
                    $id_alumno = $alumno['id'];
                    $nombre_alumno = $alumno['nombre'];
                    $apellido_alumno = $alumno['apellido'];
                    $id_tutor = $alumno['id_tutor'];
                    $id_maestro = $alumno['id_maestro'];

                    $_SESSION["id_alumno"] = $id_alumno;
                    $_SESSION["nombre_alumno"] = $nombre_alumno;
                    $_SESSION["apellido_alumno"] = $apellido_alumno;
                    $_SESSION["id_tutor"] = $id_tutor;
                    $_SESSION["id_maestro"] = $id_maestro;

                    $sql = "SELECT * FROM asignaciones WHERE id_alumno='$id_alumno'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {


                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=1");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_mate_q1 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_mate_q1 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=2");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_mate_q2 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_mate_q2 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=3");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_mate_q3 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_mate_q3 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=4");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_mate_q4 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_mate_q4 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=5");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_español_q1 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_español_q1 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=6");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_español_q2 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_español_q2 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=7");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_español_q3 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_español_q3 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=8");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_español_q4 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_español_q4 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=9");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_biologia_q1 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_biologia_q1 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=10");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_biologia_q2 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_biologia_q2 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=11");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_biologia_q3 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_biologia_q3 = 0;
                            }
                        }

                        $result = $conn->query("SELECT intentos FROM asignaciones WHERE id_alumno = $id_alumno AND id_quiz=12");
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if ($row) {
                                $intentos_biologia_q4 = (int)$row['intentos']; // Convertir el resultado a entero
                            } else {
                                $intentos_biologia_q4 = 0;
                            }
                        }


                        $_SESSION["intentos_mate_q1"] = $intentos_mate_q1;
                        $_SESSION["intentos_mate_q2"] = $intentos_mate_q2;
                        $_SESSION["intentos_mate_q3"] = $intentos_mate_q3;
                        $_SESSION["intentos_mate_q4"] = $intentos_mate_q4;

                        $_SESSION["intentos_español_q1"] = $intentos_español_q1;
                        $_SESSION["intentos_español_q2"] = $intentos_español_q2;
                        $_SESSION["intentos_español_q3"] = $intentos_español_q3;
                        $_SESSION["intentos_español_q4"] = $intentos_español_q4;

                        $_SESSION["intentos_biología_q1"] = $intentos_biologia_q1;
                        $_SESSION["intentos_biología_q2"] = $intentos_biologia_q2;
                        $_SESSION["intentos_biología_q3"] = $intentos_biologia_q3;
                        $_SESSION["intentos_biología_q4"] = $intentos_biologia_q4;
                    } else {
                        $_SESSION["intentos_mate_q1"] = 0;
                        $_SESSION["intentos_mate_q2"] = 0;
                        $_SESSION["intentos_mate_q3"] = 0;
                        $_SESSION["intentos_mate_q4"] = 0;

                        $_SESSION["intentos_español_q1"] = 0;
                        $_SESSION["intentos_español_q2"] = 0;
                        $_SESSION["intentos_español_q3"] = 0;
                        $_SESSION["intentos_español_q4"] = 0;

                        $_SESSION["intentos_biología_q1"] = 0;
                        $_SESSION["intentos_biología_q2"] = 0;
                        $_SESSION["intentos_biología_q3"] = 0;
                        $_SESSION["intentos_biología_q4"] = 0;
                    }




                    header("Location:tutor_alumno.php");
                    exit();
                } else {
                    echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">No se encontro el alumno relaiconado con el tutor</p>
            </div>';
                }
            } else {
                echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Contraseña incorrecta</p>
            </div>';
            }
        } else {
            $sql = "SELECT * FROM maestros WHERE username='$username' OR email='$username'";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row["password"])) {
                    $nombre_maestro = $row["nombre"];
                    $apellido_maestro = $row["apellido"];
                    $email_maestro = $row["email"];
                    $id_maestro = $row["id"];

                    $_SESSION["nombre_maestro"] = $nombre_maestro;
                    $_SESSION["apellido_maestro"] = $apellido_maestro;
                    $_SESSION["username_maestro"] = $username;
                    $_SESSION["email_maestro"] = $email_maestro;
                    $_SESSION["id_maestro"] = $id_maestro;
                    header("Location:maestro.php");
                    exit();
                } else {
                    echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Contraseña incorrecta</p>
            </div>';
                }
            } else {
                echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Usuario inexistente</p>
            </div>';
            }
        }
    } else {
        echo '<div style="text-align-last: center;" class="form-floating mb-3">
                <p style="background-color: red; color:black;">Todos los campos son obligatorios</p>
            </div>';
    }
}

function obtenerAlumnoPorIdTutor($conn, $id_tutor)
{
    // Preparar la consulta SQL para evitar inyecciones SQL
    $stmt = $conn->prepare("SELECT * FROM alumnos WHERE id_tutor= ?");
    $stmt->bind_param("i", $id_tutor); // "i" indica que el parámetro es un entero

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado
    $result = $stmt->get_result();

    // Verificar si se encontró el estudiante
    if ($result->num_rows > 0) {
        // Obtener los datos del estudiante
        $alumno = $result->fetch_assoc();
        return $alumno;
    } else {
        return null; // Retornar null si no se encontró el estudiante
    }
}

cerrarConexion($conn);
