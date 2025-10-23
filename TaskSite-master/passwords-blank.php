<?php
// DB-Zugang für Render + InfinityFree
$dbAddress = getenv('DB_HOST') ?: 'sql205.infinityfree.com';
$dbUser    = getenv('DB_USER') ?: 'if0_40237314';
$dbPass    = getenv('DB_PASS') ?: 'NdoTRmMaCCILxnL';
$dbName    = getenv('DB_NAME') ?: 'if0_40237314_787';
$dbPort    = getenv('DB_PORT') ?: 3306;

// Verbindung aufbauen
$conn = new mysqli($dbAddress, $dbUser, $dbPass, $dbName, $dbPort);

// Prüfen, ob Verbindung erfolgreich
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: UTF-8 Zeichensatz setzen
$conn->set_charset("utf8");
?>
