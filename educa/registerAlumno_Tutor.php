<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Educa</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Crea una cuenta para tu hijo</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    include("./controller/RegistroController.php");
                                    ?>

                                    <form action="" method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="nombre_tutor" required />
                                                    <label for="inputFirstName">Nombre del tutor</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="apellido_tutor" required />
                                                    <label for="inputLastName">Apellido del tutor</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email_tutor" required />
                                            <label for="inputEmail">Correo electrónico del tutor</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputUsuario" type="Alumno" placeholder="Alex" name="username_tutor" required />
                                                    <label for="inputUsuario">Nombre de usuario tutor</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="password" type="password" placeholder="" name="password_tutor" required />
                                                    <label for="inputEmail">Contraseña tutor</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputUsuario" type="Alumno" placeholder="Alex" name="nombre_alumno" required />
                                                    <label for="inputUsuario">Nombre del alumno</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" type="text" placeholder="" name="apellido_alumno" required />
                                                    <label for="inputEmail">Apellido del alumno</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" type="number" placeholder="" name="id_maestro" required />
                                                    <label for="inputEmail">Clave maestro</label>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><input type="submit" value="Crear cuenta" name="registrar_usuarios"></input></div>
                                </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a style="color: aliceblue;" href="index.php">¿Ya tienes una cuenta?
                                        Entra ahora</a></div>
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