<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - Semana de Sistemas 2025</title>
  <link rel="stylesheet" href="/mvc/public/css/style.css">
</head>
<body>
  <header>
    <h1>Semana de Sistemas 2025</h1>
  </header>

  <nav>
    <a href="/mvc/public">Inicio</a>
    <a href="/mvc/public/dia1">Día 1</a>
    <a href="/mvc/public/dia2">Día 2</a>
    <a href="/mvc/public/info">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>

  <h2 class="titulo">BIENVENIDO AL BLOG SDS2025</h2>

  <main>     
    <section class="intro">
      <p>Este proyecto consiste en realizar un blog sobre SDS2025 utilizando el patrón MVC con PHP.</p>
      <h3>¿Qué es la SDS2025?</h3>
      <p>
        La Semana de Sistemas es un evento muy importante para los estudiantes de Ingeniería en Sistemas.
        Se celebra en la <b>UES FMO</b> y tiene como objetivo fomentar el aprendizaje y la práctica de habilidades
        en el campo de la ingeniería de sistemas mediante actividades, talleres y conferencias.
      </p>
    </section>

    <!-- 🔹 Slider principal -->
    <div class="slider-container">
      <button class="prev">&#10094;</button>
      <div class="slider" id="slider">
        <div class="card"><img src="/mvc/public/images/primerafoto.jpg" alt="Semana de Sistemas"></div>
        <div class="card"><img src="/mvc/public/images/segundafoto.jpg" alt="Semana de Sistemas"></div>
        <div class="card"><img src="/mvc/public/images/tercerafoto.jpg" alt="Semana de Sistemas"></div>
        <div class="card"><img src="/mvc/public/images/cuartafoto.jpg" alt="Semana de Sistemas"></div>
        <div class="card"><img src="/mvc/public/images/quintafoto.jpg" alt="Semana de Sistemas"></div>
        <div class="card"><img src="/mvc/public/images/sextafoto.jpg" alt="Semana de Sistemas"></div>
        <div class="card"><img src="/mvc/public/images/septima.jpg" alt="Semana de Sistemas"></div>
      </div>
      <button class="next">&#10095;</button>
    </div>

    <!-- 🔹 Tarjetas horizontales de los días -->
    <section class="dias-section">
      <h2>Explora los Días del Evento</h2>
      <div class="dias-container">
        <div class="dia-card">
          <img src="/mvc/public/images/lunes.jpg" alt="Día 1">
          <h3>Día 1 - Inauguración y Conferencias</h3>
          <p>Descubre las ponencias de apertura y actividades principales.</p>
          <a href="/mvc/public/dia1" class="btn">Ver Día 1</a>
        </div>

        <div class="dia-card">
          <img src="/mvc/public/images/martes.jpg" alt="Día 2">
          <h3>Día 2 - Talleres Técnicos</h3>
          <p>Participa en talleres prácticos sobre programación y redes.</p>
          <a href="/mvc/public/dia2" class="btn">Ver Día 2</a>
        </div>

        
  </main>

  <footer>
    <p>© 2025 Semana de Sistemas. Todos los derechos reservados.</p>
  </footer>

  <script src="/mvc/public/js/slider.js"></script>
</body>
</html>
