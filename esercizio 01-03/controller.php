<?php 

require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i dati dal modulo
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Prepara la query SQL per l'inserimento dei dati nella tabella User
    $sql = "INSERT INTO User (name, surname, email, password, role) 
            VALUES ('$name', '$surname', '$email', '$password', '$role')";

    // Esegui la query SQL
    if ($conn->query($sql) === TRUE) {
        echo "Dati inseriti correttamente";
    } else {
        echo "Errore nell'inserimento dei dati: " . $conn->error;
    }
}

?>
