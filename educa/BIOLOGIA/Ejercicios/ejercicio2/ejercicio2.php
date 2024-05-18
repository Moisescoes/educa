<!<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juego de Clasificación de Animales</title>
  <link rel="stylesheet" href="2estilo.css">
</head>
<body>
  <div class="container">
    <h1>Juego de Clasificación de Animales</h1>
    <p>Puntuación: <span id="puntuacion">0</span></p> 
    <div id="categorias">
      <div class="categoria" id="mamiferos">
        <h2>Mamíferos</h2>
      </div>
      <div class="categoria" id="aves">
        <h2>Aves</h2>
      </div>
      <div class="categoria" id="reptiles">
        <h2>Reptiles</h2>
      </div>
    </div>
    <div id="animales">
      <img src="img/perro.png" class="animal" data-categoria="mamiferos">
      <img src="img/gato.png" class="animal" data-categoria="mamiferos">
      <img src="img/ave.png" class="animal" data-categoria="aves">
      <img src="img/vibora.png" class="animal" data-categoria="reptiles">
      
    </div>
  </div>
  <script src="2.js"></script>
</body>
</html>



