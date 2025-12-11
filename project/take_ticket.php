<?php
include "config.php";

$fullname = $_POST['fullname'];
$faculty  = $_POST['faculty'];
$specialty = $_POST['specialty'];

$sql = "INSERT INTO tickets(fullname, faculty_id, specialty_id)
        VALUES ('$fullname', '$faculty', '$specialty')";

if($conn->query($sql)){
    echo "<h3>Bilet uğurla yaradıldı!</h3>";
    echo "Ad Soyad: $fullname<br>";
    echo "Fakültə ID: $faculty<br>";
    echo "İxtisas ID: $specialty<br>";
} else {
    echo "Xəta: " . $conn->error;
}
?>
