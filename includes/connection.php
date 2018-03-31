<?php
$host       = "localhost";
$database   = "kandt";
$username   = "root";
$password   = "root";
try {
    $connection = new PDO("mysql:host=" . $host . ";dbname=" . $database, $username, $password);
} catch(PDOException $exception) {
    echo "Error: connection failed.";
    exit;
}
?>
