<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php require_once('navbar.php'); ?>
  <h1 class="text-center">Modifica attivià</h1>
    <div class="container"><form>
    <div class="mb-3">
      <label for="nomeAttivita" class="form-label">Nome Attività</label>
      <input type="text" class="form-control" id="nomeAttivita" placeholder="Nome dell'attività">
    </div>
    <div class="mb-3">
      <label for="tipoAttivita" class="form-label">Tipo Attività</label>
      <select class="form-select" id="tipoAttivita">
        <option selected>Scegli il tipo di attività...</option>
        <option value="1">Conferenza</option>
        <option value="2">Seminario</option>
        <option value="3">Workshop</option>
        <option value="4">Meeting</option>
        <option value="5">Altro</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="descrizione" class="form-label">Descrizione</label>
      <textarea class="form-control" id="descrizione" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="data" class="form-label">Data</label>
      <input type="date" class="form-control" id="data">
    </div>
    <div class="mb-3">
      <label for="ora" class="form-label">Ora</label>
      <input type="time" class="form-control" id="ora">
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>