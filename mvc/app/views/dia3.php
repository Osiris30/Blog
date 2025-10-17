<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Día 3 - Semana de Sistemas 2025</title>
  <link rel="stylesheet" href="/mvc/public/css/dia3.css">
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
    <a href="/mvc/public/dia3">Día 3</a>
    <a href="/mvc/public/dia4">Día 4</a>
    <a href="/mvc/public/dia5">Día 5</a>
    <a href="/mvc/public/Miinformacion">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>

  <h2 class="titulo-dia3"> Día 3 - Partido de fútbol</h2>

  <main>
    <?php foreach ($actividades as $act): ?>
      <section class="actividad">
        <h2><?= htmlspecialchars($act["titulo"]) ?></h2>
        <p>
          <?php if ($act["titulo"] === "Torneo de fútbol 11"): ?>
            Este día se iba a llevar a cabo el torneo de fútbol 11, 
            pero por motivos climáticos se suspendió.
            <?= htmlspecialchars($act["descripcion"]) ?>
          <?php else: ?>
            <?= htmlspecialchars($act["descripcion"]) ?>
          <?php endif; ?>
        </p>

        <?php if (!empty($act["imagenes"])): ?>
          <div class="galeria">
            <?php foreach ($act["imagenes"] as $img): ?>
              <img src="<?= $img ?>" alt="<?= htmlspecialchars($act["titulo"]) ?>">
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($act["video"])): ?>
          <video src="<?= $act["video"] ?>" controls></video>
        <?php endif; ?>
      </section>
    <?php endforeach; ?>
  </main>
  <footer>
    <p>© 2025 Semana de Sistemas. Todos los derechos reservados.</p>
  </footer>

  
</body>
</html>
