<?php
session_start();

$host = 'localhost';
$dbname = 'studenten_login';
$username = 'root'; // Pas dit aan naar jouw database gebruikersnaam
$password = ''; // Pas dit aan naar jouw database wachtwoord

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Fout bij verbinden met database: " . $e->getMessage());
}
?>
