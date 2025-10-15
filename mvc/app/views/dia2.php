<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Día 2 - Semana de Sistemas 2025</title>
  <link rel="stylesheet" href="/mvc/public/css/dia2.css">
</head>
<body>
  <header>
    <h1>Semana de Sistemas 2025</h1>
  </header>

  <nav>
    <a href="/mvc/public">Inicio</a>
    <a href="/mvc/public/dia1">Día 1</a>
    <a href="/mvc/public/dia2" class="active">Día 2</a>
    <a href="/mvc/public/info">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>

  <h2 class="titulo-dia2">Día 2 - Talleres</h2>

  <main>
    <?php foreach ($actividades as $act): ?>
      <section class="actividad">
        <h2><?= htmlspecialchars($act["titulo"]) ?></h2>
        <p><?= htmlspecialchars($act["descripcion"]) ?></p>

        
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
</body>
</html>
