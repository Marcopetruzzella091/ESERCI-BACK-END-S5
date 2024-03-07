<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>  <?php require_once('navbar.php'); ?>
  <div class="container mt-5">
  <h2>elimina attività</h2>
  <ul class="list-group">
    <!-- Elemento della lista 1 -->
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Nome Attività: Workshop di Fotografia
      <button class="btn btn-danger btn-sm">Elimina</button>
    </li>
    <!-- Elemento della lista 2 -->
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Nome Attività: Seminario di Marketing Digitale
      <button class="btn btn-danger btn-sm">Elimina</button>
    </li>
    <!-- Aggiungi ulteriori elementi della lista qui -->
  </ul>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>