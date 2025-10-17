<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Información</title>
  <link rel="stylesheet" href="/mvc/public/css/Miinformacion.css">
</head>
<body>
  <header>
    <h1>Semana de Sistemas</h1>
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

  <main class="info-container">
    <div class="info-card">
      <div class="foto">
        <img src="<?php echo $miInformacion['foto']; ?>" alt="Foto personal">
      </div>
      <div class="detalles">
        <h2><?php echo $miInformacion['nombre']; ?></h2>
        <p><strong>Carrera:</strong> <?php echo $miInformacion['carrera']; ?></p>
        <p><strong>Universidad:</strong> <?php echo $miInformacion['universidad']; ?></p>
        <p><strong>Correo:</strong> <?php echo $miInformacion['correo']; ?></p>
        <p class="descripcion"><?php echo $miInformacion['descripcion']; ?></p>
      </div>
    </div>
  </main>
</body>
</html>
