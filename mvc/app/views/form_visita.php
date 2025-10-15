<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar visita</title>
  <link rel="stylesheet" href="/mvc/public/css/form.css">
</head>
<body>
  <header>
    <h1>Registro de visitas</h1>
  </header>
   <nav>
    <a href="/mvc/public">Inicio</a>
    <a href="/mvc/public/dia1">Día 1</a>
    <a href="/mvc/public/info">Mi información</a>
    <a href="/mvc/public/visitas">Registrar visita</a>
  </nav>

  <main class="container">
    <form method="POST" action="/mvc/public/visitas/guardar">
      <label>Nombre:</label>
      <input type="text" name="nombre" required>

      <label>Correo electrónico:</label>
      <input type="email" name="email" required>

      <label>Comentario:</label>
      <textarea name="comentario"></textarea>

      <button type="submit">Registrar</button>
    </form>
  </main>
</body>
</html>
