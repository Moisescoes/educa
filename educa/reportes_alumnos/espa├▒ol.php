<?php
include("../controller/conexion.php");
$conn = crearConexion();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si hay un nombre de usuario en la sesión
if (isset($_SESSION["username_maestro"]) && !empty($_SESSION["username_maestro"])) {
    $nombre_maestro = $_SESSION["nombre_maestro"];
    $apellido_maestro = $_SESSION["apellido_maestro"];
    $username_maestro = $_SESSION["username_maestro"];
    $email_maestro = $_SESSION["email_maestro"];
    $id_maestro = $_SESSION["id_maestro"];
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Educa</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../maestro.php">Inicio</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="tutor_settings.php">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="./controller/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Asigna</div>
                        <a class="nav-link" href="../asigna.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Asigna
                        </a>
                        <div class="sb-sidenav-menu-heading">Reportes</div>
                        <a class="nav-link collapsed" href="./reporteAlumnos.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Alumnos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="./matematicas.php">Matemáticas</a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="./español.php">Español</a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="./biologia.php">Biología</a>
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Maestro:</div>
                    <?php echo "$nombre_maestro $apellido_maestro"; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="text-center font-weight-light my-4">Educa</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>

                    <h2>Lista de Alumnos</h2>
                    <table>
                        <tr>
                            <th>ID Alumno</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                        </tr>
                        <?php
                        // Obtener datos de alumnos
                        $sql = "SELECT * FROM calificaciones";
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                            // Mostrar datos de cada fila
                            while ($row = $result->fetch_assoc()) {
                                $nombre_alumno = giveNameAlumno($conn, $row["id_alumno"]);
                                $apellido_alumno = giveApellidoAlumno($conn, $row["id_alumno"]);
                                echo "<tr><td>" . $row["calificacion"] . "</td><td>" . $nombre_alumno . "</td><td>" . $apellido_alumno . "</td><td>" .  "</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No hay datos</td></tr>";
                        }
                        cerrarConexion($conn);
                        ?>
                    </table>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; educa.com</div>
                        <div>
                            <a href="#">Politicas de Privacidad</a>
                            &middot;
                            <a href="#">Terminos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>

<?php
function giveNameAlumno($conn, $id_alumno)
{
    // Preparar la declaración SQL
    $sql = "SELECT nombre FROM alumnos WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        // Ligar el parámetro
        $stmt->bind_param("i", $id_alumno);

        // Ejecutar la declaración
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Recuperar el nombre del alumno
            $row = $result->fetch_assoc();
            return $row["nombre"];
        } else {
            return null; // No se encontró el alumno
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error en la preparación de la declaración: " . $conn->error;
        return null;
    }
}

function giveApellidoAlumno($conn, $id_alumno)
{
    // Preparar la declaración SQL
    $sql = "SELECT apellido FROM alumnos WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        // Ligar el parámetro
        $stmt->bind_param("i", $id_alumno);

        // Ejecutar la declaración
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Recuperar el nombre del alumno
            $row = $result->fetch_assoc();
            return $row["apellido"];
        } else {
            return null; // No se encontró el alumno
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error en la preparación de la declaración: " . $conn->error;
        return null;
    }
}

?>