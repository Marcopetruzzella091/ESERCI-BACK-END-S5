<?php 
require_once "config.php";
$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password']);

$sql = 'USE bancadati;';
$mysqli->query($sql);

if(isset($_GET['action'])) {
    // Creo la tabella
    $sql = 'CREATE TABLE IF NOT EXISTS utenti ( 
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL, 
        surname VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE , 
        number INT  NOT NULL
    )';
    if(!$mysqli->query($sql)) { die($mysqli->connect_error); }

    $name = $_REQUEST['name'];
    $surname = $_REQUEST['surname'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    echo $name . " " . $surname . " " . $email . " " . $number;

    if($_GET['action'] === "insert") {
        $sql = "INSERT INTO utenti (name, surname, email, number) VALUES ('$name', '$surname', '$email', $number)";
        if (!$mysqli->query($sql)) {
            echo ($mysqli->connect_error);
        } else {
            echo 'Record aggiunto con successo!!!';
        }
    } else if($_GET['action'] === "insert_csv") {
        $dir = 'file/';
        $file = 'users.csv';
        $puschcsv = [$name, $surname, $email, $number];
        $resource = fopen($dir.$file, 'a');
        if($resource) {
            fputcsv($resource, $puschcsv, ';');
            fclose($resource);
        }
    }
}
?>
