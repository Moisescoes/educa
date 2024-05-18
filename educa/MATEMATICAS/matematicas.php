<?php
session_start();
$intentosq1 = $_SESSION["intentos_mate_q1"];
$intentosq2 = $_SESSION["intentos_mate_q2"];
$intentosq3 = $_SESSION["intentos_mate_q3"];
$intentosq4 = $_SESSION["intentos_mate_q4"];
if ($intentosq1 == 0) {
  $btn_q1 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq1 >= 3) {
  $btn_q1 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
  $btn_q1 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio1/ejercicio.php">CLICK</a>';
}

if ($intentosq2 == 0) {
  $btn_q2 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq2 >= 3) {
  $btn_q2 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
  $btn_q2 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio2/ejercicio2.php">CLICK</a>';
}

if ($intentosq3 == 0) {
  $btn_q3 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq3 >= 3) {
  $btn_q3 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
  $btn_q3 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio4/ejercicio4.php">CLICK</a>';
}

if ($intentosq4 == 0) {
  $btn_q4 = $btn_q1 = '<a class="btn btn-outline-dark mt-auto">Deshabilitado</a>';
} else if ($intentosq4 >= 3) {
  $btn_q4 = '<a class="btn btn-outline-dark mt-auto">No hay más intentos</a>';
} else {
  $btn_q4 = '<a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio8/ejercicio8.php">CLICK</a>';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Educa</title>

  <link rel="icon" type="image/x-icon" href="img/icon.png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <link href="./css/styles.css" rel="stylesheet" />
</head>

<body>
  <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">MATEMÁTICAS</h1>
        <p class="lead fw-normal text-white-50 mb-0">
          Cada problema tiene una solución, y tú puedes encontrarla
        </p>
        <nav>
          <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="../tutor_alumno.php">MENÚ PRINCIPAL</a>
          </div>
        </nav>
        <div class="d-flex justify-content-center small text-warning mb-2">
          <div class="bi-star-fill"></div>
          <div class="bi-star-fill"></div>
          <div class="bi-star-fill"></div>
          <div class="bi-star-fill"></div>
          <div class="bi-star-fill"></div>
        </div>
      </div>
    </div>
  </header>

  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="img/ejercicio5.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">SUMAS CON FRACCIONES</h5>
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
              </div>
            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio5/video.html">CLICK</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="img/ejercicio6.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">DIVISIONES</h5>
              </div>
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
              </div>
            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio6/video.html">CLICK</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="img/ejercicio7.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">CUENTA OBJETOS</h5>
              </div>
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
              </div>
            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio7/video.html">CLICK</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="img/ejercicio4.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">VIDEO DEL TEMA "SUMA"</h5>
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
              </div>
            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="Ejercicios/ejercicio3/video.html">CLICK</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="img/ejercicio1.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">JUEGO DE PREGUNTAS DE MATEMÁTICAS</h5>
              </div>
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
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
            <img class="card-img-top" src="img/ejercicio2.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">RELACIONA LAS OPERACIONES</h5>
              </div>
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
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
            <img class="card-img-top" src="img/ejercicio3.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">CONTEMOS LOS OBJETOS</h5>
              </div>
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
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
            <img class="card-img-top" src="img/ejercicio8.jpeg" alt="..." />

            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder">RECTA NÚMERICA</h5>

                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
              </div>
            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center">
                <?php
                echo $btn_q4
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-5 bg-dark">
    <div class="container"></div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/scripts.js"></script>
</body>

</html>