<!-- dia1.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Día 1 - Semana de Sistemas 2025</title>
  <link rel="stylesheet" href="/mvc/public/css/dia1.css">

</head>
<body>
  <header>
    <h1>Semana de Sistemas</h1>
  </header>

  <nav>
    <a href="/mvc/public">Inicio</a>
    <a href="/mvc/public/dia1">Día 1</a>
    <a href="/mvc/public/dia2">Día 2</a>
    <a href="/mvc/public/info">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>
  <h2>Día 1 - Inauguración y Talleres</h2>
 

  <main>
    <?php foreach ($actividades as $act): ?>
      <section class="actividad">
        <h2><?= htmlspecialchars($act["titulo"]) ?></h2>
        <p><?= htmlspecialchars($act["descripcion"]) ?></p>

        <!-- Imágenes -->
        <?php if (!empty($act["imagenes"])): ?>
          <div class="imagenes-collage">
            <?php foreach ($act["imagenes"] as $img): ?>
              <img src="<?= $img ?>" alt="<?= htmlspecialchars($act["titulo"]) ?>">
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <!-- Video -->
        <?php if (!empty($act["video"])): ?>
          <video src="<?= $act["video"] ?>" controls width="400"></video>
        <?php endif; ?>
      </section>
    <?php endforeach; ?>
</main>


</body>
</html>
