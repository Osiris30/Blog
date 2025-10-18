<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar visita</title>
  <link rel="stylesheet" href="/mvc/public/css/form_visita.css">
  <link rel="stylesheet" href="/mvc/public/css/style.css">
  <link rel="stylesheet" href="/mvc/public/css/dia4.css">

  
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

  <main class="container">
    <?php if (!empty($success)): ?>
  <p class="success">¡Visita registrada exitosamente!</p>
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

    <hr>

    <h2>Visitas registradas</h2>

    <?php if (!empty($visitas)): ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Comentario</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($visitas as $v): ?>
            <tr>
              <td><?= htmlspecialchars($v['id']) ?></td>
              <td><?= htmlspecialchars($v['nombre']) ?></td>
              <td><?= htmlspecialchars($v['correo']) ?></td>
              <td><?= htmlspecialchars($v['comentario']) ?></td>
              <td><?= htmlspecialchars($v['fecha_visita']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>No hay visitas registradas.</p>
    <?php endif; ?>
  </main>
  <footer>
    <p>© 2025 Semana de Sistemas. Todos los derechos reservados.</p>
  </footer>
</body>
</html>