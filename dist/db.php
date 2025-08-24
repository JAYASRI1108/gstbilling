<?php
$host = "localhost";      // or your DB host (e.g., 127.0.0.1 or remote IP)
$dbname = "billing" ; // change to your DB name
$username = "root";     // change to your DB username
$password = "";     // change to your DB password

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
