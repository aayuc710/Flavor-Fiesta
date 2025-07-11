<?php

$servername = 'localhost';
$dbname = 'food_db';
$username = 'root';
$password = 'System #1234';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Additional settings or configurations can be added here
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    // Handle the connection error appropriately, e.g., log the error, display a message, etc.
}

// No need to close PHP tag if the file contains only PHP code.
