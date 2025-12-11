<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ticket_queue_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB xətası: " . $conn->connect_error);
}
?>
