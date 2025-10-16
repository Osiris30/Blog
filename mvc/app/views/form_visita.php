<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar visita</title>
  <link rel="stylesheet" href="/mvc/public/css/form_visita.css">
</head>
<body>
  <header>
    <h1>Semana de Sistemas 2025</h1>
  </header>

  <nav>
    <a href="/mvc/public">Inicio</a>
    <a href="/mvc/public/dia1">Día 1</a>
    <a href="/mvc/public/dia2">Día 2</a>
    <a href="/mvc/public/MiInformacion">Mi información</a>
    <a href="/mvc/public/visitas" class="active">Registrar visita</a>
  </nav>

  <main class="container">
    <?php if (isset($_GET['success'])): ?>
      <p class="success"> Visita registrada exitosamente.</p>
    <?php endif; ?>

    <form method="POST" action="/mvc/public/visitas/guardar">
      <label>Nombre:</label>
      <input type="text" name="nombre" required>

      <label>Correo electrónico:</label>
      <input type="email" name="email" required>

      <label>Comentario:</label>
      <textarea name="comentario" rows="4"></textarea>

      <button type="submit">Guardar</button>
    </form>
  </main>
</body>
</html>
