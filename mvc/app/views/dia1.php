
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
    <a href="/mvc/public/dia1" class="active">Día 1</a>
    <a href="/mvc/public/dia2">Día 2</a>
    <a href="/mvc/public/info">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>

  <h2 class="titulo-dia1">Día 1 - Inauguración y Ponencias</h2>

  <main>
    <?php foreach ($actividades as $act): ?>
      <section class="actividad <?= in_array($act['titulo'], [
          'Primera Ponencia - El ABC DEL BITCOIN',
          'Segunda Ponencia - Inteligencia Artificial'
      ]) ? 'justify-text' : '' ?>">

        <h2><?= htmlspecialchars($act["titulo"]) ?></h2>

        
        <?php if ($act["titulo"] === "Primera Ponencia - El ABC DEL BITCOIN"): ?>
          <p>
            Luis Contreras nos presentó la ponencia <strong>“El ABC DEL BITCOIN”</strong>, donde abordó los siguientes temas:<br>
            <strong>Qué es el dinero:</strong> concepto y su importancia en la economía.<br>
            <strong>Por qué el sistema financiero está “roto”:</strong> problemas de inflación, control centralizado y limitaciones del dinero tradicional.<br>
            <strong>Qué es Bitcoin:</strong> introducción a la primera criptomoneda descentralizada.<br>
            <strong>Cómo funciona Bitcoin:</strong> blockchain, minado y transacciones seguras.<br>
            <strong>Cómo usar Bitcoin:</strong> consejos para crear wallets, enviar y recibir pagos de forma segura.<br>
          </p>

        <?php elseif ($act["titulo"] === "Segunda Ponencia - Inteligencia Artificial"): ?>
          <p>
            Rodrigo Pineda nos presentó la ponencia <strong>“Inteligencia Artificial”</strong>, donde abordó los siguientes temas:<br>
            <strong>Transformación y evolución de la IA:</strong> cómo la IA ha cambiado la forma en que interactuamos con la tecnología y los procesos industriales.<br>
            <strong>Clasificación de la IA según su capacidad:</strong> IA débil (IA estrecha) e IA fuerte (IA general), con ejemplos prácticos.<br>
            <strong>Fundamentos de la IA:</strong> conceptos esenciales, algoritmos y técnicas que permiten el aprendizaje y la toma de decisiones.<br>
            <strong>Elementos de un sistema cognitivo de Machine Learning:</strong> datos, modelos, entrenamiento y evaluación.<br>
            <strong>Diferencias entre ML, DL y FM:</strong> comparación entre aprendizaje automático, aprendizaje profundo y modelos fundamentados en reglas.<br>
            <strong>Redes Generativas Antagónicas (GAN):</strong> explicación de su funcionamiento y aplicaciones para generación de imágenes, audio y otros datos sintéticos.<br>
          </p>

        <?php else: ?>
          <p><?= htmlspecialchars($act["descripcion"]) ?></p>
        <?php endif; ?>

        <!-- Imágenes en collage -->
        <?php if (!empty($act["imagenes"])): ?>
          <div class="imagenes-collage">
            <?php foreach ($act["imagenes"] as $img): ?>
              <img src="<?= $img ?>" alt="<?= htmlspecialchars($act["titulo"]) ?>">
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <!-- Video -->
        <?php if (!empty($act["video"])): ?>
          <video src="<?= $act["video"] ?>" controls></video>
        <?php endif; ?>

      </section>
    <?php endforeach; ?>
  </main>

</body>
</html>
