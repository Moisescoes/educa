<?php
session_start();
$intentosq1 = $_SESSION["intentos_biología_q1"];
$intentosq2 = $_SESSION["intentos_biología_q2"];
$intentosq3 = $_SESSION["intentos_biología_q3"];
$intentosq4 = $_SESSION["intentos_biología_q4"];
if ($intentosq1 == 0) {
    $btn_q1 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq1 >= 3) {
    $btn_q1 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
    $btn_q1 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio1/ejercicio1.html">CLICK</a>';
}

if ($intentosq2 == 0) {
    $btn_q2 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq2 >= 3) {
    $btn_q2 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
    $btn_q2 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio2/ejercicio2.html">CLICK</a>';
}

if ($intentosq3 == 0) {
    $btn_q3 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq3 >= 3) {
    $btn_q3 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
    $btn_q3 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio3/ejercicio.html">CLICK</a>';
}

if ($intentosq4 == 0) {
    $btn_q4 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq4 >= 3) {
    $btn_q4 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
    $btn_q4 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio4/ejercicio4.html">CLICK</a>';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BIOLOGIA</title>

    <link rel="icon" type="image/x-icon" href="assets/hierba.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>


    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">BIOLOGIA</h1>
                <p class="lead fw-normal text-white-50 mb-0">Ciencia que estudia la vida desde diferentes puntos de vista
                </p>
            </div>
        </div>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="../tutor_alumno.php">MENÚ PRINCIPAL</a>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="img/activi1.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">VIDEO DEL REINO ANIMAL</h5>
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="Videos/video1/video.html">CLICK</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="img/activi3.jpeg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">VIDEO DE CLASIFICACION DE ANIMALES</h5>


                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="Videos/video2/video.html">CLICK</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="img/activi5..jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">VIDEO DE LOS ESTADOS DEL AGUA</h5>


                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="Videos/video3/video.html">CLICK</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="img/activi7.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">VIDEO DE LAS 3 R</h5>


                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="Videos/video4/video.html">CLICK</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">



                        <img class="card-img-top" src="img/activi2.jpeg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">JUEGO DE PAREJAS</h5>

                                <span class="text-muted text-decoration-line-through"></span>

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php
                                echo $btn_q1
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="img/activi4.jpeg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">CLAFISICA LOS ANIMALES</h5>

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php
                                echo $btn_q2
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="img/activi6.jpeg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder"> ESTADOS DEL AGUA </h5>

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php
                                echo $btn_q3
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="img/activi8.jpeg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">TRIVIA DE LAS 3R</h5>
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php
                                echo $btn_q1
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-5 bg-dark">
        <div class="container">

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>
</body>

</html>