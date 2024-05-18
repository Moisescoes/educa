<?php
session_start();


// Verificar si hay un nombre de usuario en la sesión
if (isset($_SESSION["nombre_alumno"]) && !empty($_SESSION["nombre_alumno"])) {
    // Si hay un nombre de usuario en la sesión
    header("Location: tutor_alumno.php");
} else {
    if (isset($_SESSION["username_maestro"]) && !empty($_SESSION["username_maestro"])) {
        // Si hay un nombre de usuario en la sesión
        header("Location: maestro.php");
    }
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
    <title>Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="background-image:url('./image/background.jpg'); background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  background-attachment: fixed;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <h1 class="text-center font-weight-light my-4">Bienvenido a Educa</h1>
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Inicia sesión</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    include("./controller/LoginController.php");
                                    ?>
                                    <form action="" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="username" />
                                            <label for="inputEmail">Usuario o email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                            <label for="inputPassword">Contraseña</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><input type="submit" value="Iniciar sesión" name="login"></input></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./registerAlumno_Tutor.php">Crea una cuenta de tutor!</a>
                                    </div>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./registerMaestro.php">Crea una cuenta de maestro!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
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
</body>

</html>