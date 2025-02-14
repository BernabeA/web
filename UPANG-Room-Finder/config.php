<?php

define("API_URL", "http://localhost/RoomFinder_API/");

$host = "localhost";
$dbname = "room_finder_db";
$username = "root"; 
$password = "";  

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
