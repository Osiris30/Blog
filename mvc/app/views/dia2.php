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
    <a href="/mvc/public/dia2">Día 2</a>
    <a href="/mvc/public/dia3">Día 3</a>
    <a href="/mvc/public/dia4">Día 4</a>
    <a href="/mvc/public/dia5">Día 5</a>
    <a href="/mvc/public/Miinformacion">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>

  <h2 class="titulo-dia2">Día 2 - Talleres</h2>

  <main>
    <?php foreach ($actividades as $act): ?>
      <section class="actividad">
        <h2><?= htmlspecialchars($act["titulo"]) ?></h2>
        <p>
  <?php if ($act["titulo"] === "Taller #1 Toma de decisiones estratégicas basadas en datos"): ?>
    Facilitador: <strong>Enrique Cortez</strong><br><br>
    En este taller se exploró cómo el análisis de datos permite tomar decisiones más inteligentes en empresas y proyectos. 
    Se presentaron técnicas de recolección, limpieza y visualización de datos, así como herramientas de inteligencia de negocios
    para interpretar información y convertirla en estrategias efectivas.
  
  <?php elseif ($act["titulo"] === "Taller #2 Construyendo un CRUD en minutos"): ?>
    Facilitador: <strong>Ing. Gabriel Castillo</strong><br><br>
    Taller práctico para aprender a crear un CRUD (Crear, Leer, Actualizar, Eliminar) desde cero. 
    Se trabajó con buenas prácticas de desarrollo web, arquitectura MVC, conexión con bases de datos y construcción de interfaces intuitivas usando HTML, CSS y PHP.

  <?php elseif ($act["titulo"] === "Taller #3 IA Multimodal - Creando el futuro visual e inteligente con n8n"): ?>
    Facilitador: <strong>José Salmerón</strong><br><br>
    Este taller mostró cómo integrar inteligencia artificial multimodal, combinando procesamiento de imágenes, texto y voz. 
    Los participantes conocieron la herramienta <strong>n8n</strong> para automatizar flujos de trabajo con modelos generativos,
    visión computacional y aplicaciones prácticas en análisis de datos, arte digital y asistentes virtuales.

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
</body>
</html>
