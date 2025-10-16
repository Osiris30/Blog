<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar visita</title>
  <link rel="stylesheet" href="/mvc/public/css/form_visita.css">
  
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
    <?php if ($success): ?>
      <p class="success"></p>
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
</body>
</html>
