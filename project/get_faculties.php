<?php
require "config.php";

$sql = "SELECT * FROM faculties ORDER BY name";
$res = $conn->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);
