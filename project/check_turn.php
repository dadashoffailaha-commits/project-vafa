<?php
include "config.php";

$res = $conn->query("SELECT ticket_number FROM tickets WHERE status='called' ORDER BY id DESC LIMIT 1");

if($res->num_rows == 0){
  echo json_encode(["ok"=>false]);
  exit;
}

$row = $res->fetch_assoc();
echo json_encode([
  "ok"=>true,
  "called"=>true,
  "ticket"=>$row['ticket_number']
]);
?>
