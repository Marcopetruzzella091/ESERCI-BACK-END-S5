<?php
require_once 'db.php';



class form {
  public $name;
  public $surname;
  public $email;
  public $password;
  protected $role;
  protected $isadmin;

  function __construct($name, $surname, $email, $password, $role, $isadmin) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->password = $password;
    $this->role = $role;
    $this->isadmin = true; // Assegnamento di $isadmin come proprietà della classe
  }
   
  function getform(){
    echo "
    <form action='controller.php?request=create' method='post' >
      <div class='form-group'>
        <label for='campo1'>$this->name</label>
        <input type='text' class='form-control' name='name' id='campo1' placeholder='Inserisci valore per Campo 1'>
      </div>
      <div class='form-group'>
        <label for='campo2'>$this->surname</label>
        <input type='text' class='form-control' name='surname' id='campo2' placeholder='Inserisci valore per Campo 2'>
      </div>
      <div class='form-group'>
        <label for='campo3'>$this->email</label>
        <input type='text' class='form-control' name='email' id='campo3' placeholder='Inserisci valore per Campo 3'>
      </div>
      <div class='form-group'>
        <label for='campo4'>$this->password</label>
        <input type='text' class='form-control' name='password' id='campo4' placeholder='Inserisci valore per Campo 4'>
      </div>";

    if($this->isadmin) { // Utilizzo della proprietà della classe $isadmin
      echo "
      <div class='form-group'>
        <label for='campo5'>$this->role</label>
        <input type='text' class='form-control' name='role' id='campo5' placeholder='Inserisci un valore aggiuntivo'>
      </div>";
    }
    
    echo "
      <button type='submit' class='btn btn-primary mt-3'>Invia</button>
    </form>";
  }
}

$isadmin = true; // Variabile $isadmin

$forms = new form(
  "Nome", 
  "Cognome", 
  "Email", 
  "Password",
  "Ruolo",
  $isadmin // Passaggio di $isadmin come argomento del costruttore
);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea un form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>
<div class="container mt-5">
 
 <h1> Form iscrizione</h1>
 <div>
 <?php $forms->getform(); ?>
 </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
