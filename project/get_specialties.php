<?php
include "config.php";

$fid = $_GET['faculty_id'];

$q = $conn->query("SELECT * FROM specialty WHERE faculty_id = $fid");

$data = [];
while($row = $q->fetch_assoc()){
    $data[] = $row;
}

echo json_encode($data);
?>
