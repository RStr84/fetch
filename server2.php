<?php

$username = $_GET['username'] ?? '';
$password = $_GET['password'] ?? '';

if ($username === 'max' && $password === 'geheim') {
    echo "Login erfolgreich! Willkommen, $username + $password!.";
} else {
    echo "Login fehlgeschlagen! Ungültige Anmeldedaten.";
}