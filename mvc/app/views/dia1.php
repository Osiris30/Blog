<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Día 1 - Semana de Sistemas 2025</title>
  <link rel="stylesheet" href="/mvc/public/css/style.css">
</head>
<body>
  <header>
    <h1>Día 1 - Inauguración y Talleres</h1>
  </header>
  <nav>
    <a href="/mvc/public">Inicio</a>
    <a href="/mvc/public/dia1">Día 1</a>
    <a href="/mvc/public/info">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>

  <main>
    <?php foreach ($actividades as $act): ?>
      <section class="actividad">
        <h2><?= htmlspecialchars($act["titulo"]) ?></h2>
        <p><?= htmlspecialchars($act["descripcion"]) ?></p>
        <img src="<?= $act["imagen"] ?>" alt="<?= $act["titulo"] ?>">
        <video src="<?= $act["video"] ?>" controls width="400"></video>
      </section>
    <?php endforeach; ?>
  </main>
</body>
</html>
