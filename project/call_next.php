<?php
include "config.php";

$res = $conn->query("SELECT * FROM tickets WHERE status='waiting' ORDER BY id ASC LIMIT 1");

if($res->num_rows == 0){
  echo json_encode(["ok"=>false]);
  exit;
}

$ticket = $res->fetch_assoc();

$conn->query("UPDATE tickets SET status='called' WHERE id=".$ticket['id']);

echo json_encode([
  "ok"=>true,
  "ticket"=>$ticket
]);
?>
