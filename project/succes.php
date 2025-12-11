<?php
include "config.php";
$id = $_GET['id'];

$res = $conn->query("SELECT * FROM tickets WHERE id = $id");
$ticket = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>Bilet Hazırdır</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container ticket-box">
  <h2>Növbə Uğurla Alındı</h2>
  <p><b>Ad:</b><?= $ticket['fullname'] ?></p>
  <p><b>Nömrə:</b> <?= $ticket['ticket_number'] ?></p>
  <p><b>Xidmət:</b> <?= $ticket['service_type'] ?></p>
  <img src="<?= $ticket['qr_data'] ?>">
</div>

</body>
</html>
