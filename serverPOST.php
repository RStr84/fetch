<?php

// Überprüfen, ob die Request-Methode POST ist
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // POST-Daten empfangen
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $vorname = $_POST['vorname'] ?? '';
    $nachname = $_POST['nachname'] ?? '';

    // Antwort des Servers
    echo "Username: $username, Password: $password, Vorname: $vorname, Nachname: $nachname";}
