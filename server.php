<?php

// Überprüfen, ob GET Parameter gesetzt sind
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    // Überprüfen, ob Anmeldedaten übereinstimmen mit entsprechendem Echo
    if ($username === 'max' && $password === 'geheim') {
        echo "Login erfolgreich! Willkommen, $username.";
    } else {
        echo "Login fehlgeschlagen! Ungültige Anmeldedaten.";
    }
} else {
    echo "Fehlende Parameter.";
}


