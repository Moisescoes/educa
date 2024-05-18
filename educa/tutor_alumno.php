<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si hay un nombre de usuario en la sesión
if (isset($_SESSION["nombre_alumno"]) && !empty($_SESSION["nombre_alumno"])) {
    // Si hay un nombre de usuario en la sesión, asignarlo a la variable $username
    $id_alumno = $_SESSION["id_alumno"];
    $nombre_alumno = $_SESSION["nombre_alumno"];
    $apellido_alumno = $_SESSION["apellido_alumno"];
    $id_tutor = $_SESSION["id_tutor"];
    $id_maestro = $_SESSION["id_maestro"];

    $nombre_tutor = $_SESSION["nombre_tutor"];
    $apellido_tutor = $_SESSION["apellido_tutor"];
    $email_tutor = $_SESSION["email_tutor"];
    $username_tutor = $_SESSION["username_tutor"];
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
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Inicio</a>
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
                        <div class="sb-sidenav-menu-heading">Trabaja</div>
                        <a class="nav-link" href="./MATEMATICAS/matematicas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            MATEMÁTICAS
                        </a>
                        <a class="nav-link" href="./ESPAÑOL/español.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            ESPAÑOL
                        </a>
                        <a class="nav-link" href="./BIOLOGIA/index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            BIOLOGÍA
                        </a>
                        <div class="sb-sidenav-menu-heading">Reportes</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Tutorado
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Calificaciones</a>
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Tutor:</div>
                    <?php echo "$nombre_tutor $apellido_tutor" ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main class="align-items-center">
                <div class="container-fluid px-4">
                    <section id="about" class="content-section">
                        <header>
                            <h1>Bienvenidos a Educa</h1>
                            <p>Revolucionando la educación en el hogar</p>
                        </header>
                    </section>


                    <section id="about" class="content-section">
                        <h2>Acerca de Nosotros</h2>
                        <p>Bienvenidos a Educa, una empresa dedicada a revolucionar la educación en el hogar mediante un
                            enfoque personalizado y centrado en el estudiante. En Educa, creemos que cada niño es único
                            y merece una educación que respete y nutra sus intereses y habilidades individuales.</p>
                    </section>

                    <section id="mission" class="content-section">
                        <h2>Nuestra Misión</h2>
                        <p>En Educa, nuestra misión es proporcionar a las familias las herramientas, recursos y apoyo
                            necesarios para ofrecer una educación de calidad en casa. Nos comprometemos a crear un
                            entorno de aprendizaje seguro, estimulante y flexible, que fomenta el amor por el
                            conocimiento, la creatividad y el desarrollo integral de cada niño.</p>
                    </section>

                    <section id="services" class="content-section">
                        <h2>Nuestros Servicios</h2>
                        <div class="services-container">
                            <div class="service-item">
                                <h3>Planes de estudios personalizados</h3>
                                <p>Diseñamos currículos adaptados a las necesidades, intereses y ritmo de aprendizaje de
                                    cada niño.</p>
                            </div>
                            <div class="service-item">
                                <h3>Recursos educativos</h3>
                                <p>Ofrecemos una amplia gama de materiales didácticos, libros y recursos en línea para
                                    enriquecer el aprendizaje.</p>
                            </div>
                            <div class="service-item">
                                <h3>Asesoramiento y apoyo</h3>
                                <p>Brindamos orientación continua a las familias para ayudarlas a implementar y mantener
                                    un sistema educativo efectivo en casa.</p>
                            </div>
                            <div class="service-item">
                                <h3>Evaluación y seguimiento</h3>
                                <p>Proporcionamos herramientas y estrategias para evaluar el progreso académico y
                                    personal de los niños, ajustando el enfoque educativo según sea necesario.</p>
                            </div>
                        </div>
                    </section>

                    <section id="values" class="content-section">
                        <h2>Nuestros Valores</h2>
                        <p><strong>Personalización:</strong> Adaptamos la educación a las necesidades y talentos únicos
                            de cada niño.</p>
                        <p><strong>Empatía y respeto:</strong> Fomentamos un ambiente de aprendizaje basado en el
                            respeto mutuo y la comprensión.</p>
                        <p><strong>Innovación:</strong> Utilizamos métodos y recursos educativos innovadores para
                            mantener a los niños motivados y comprometidos.</p>
                        <p><strong>Colaboración:</strong> Trabajamos de la mano con las familias para asegurar el éxito
                            educativo de sus hijos.</p>
                    </section>



                </div>
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