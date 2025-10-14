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
