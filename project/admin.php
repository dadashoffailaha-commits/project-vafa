<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Növbə paneli</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
<h2>Admin Panel</h2>

<form method="post">
  <button name="next">Növbəti çağır</button>
</form>

<?php
if(isset($_POST['next'])){
  $res = $conn->query("SELECT * FROM tickets WHERE status='waiting' ORDER BY id ASC LIMIT 1");

  if($res->num_rows > 0){
    $ticket = $res->fetch_assoc();
    $conn->query("UPDATE tickets SET status='called' WHERE id=".$ticket['id']);

    echo "<h3>Çağırılan nömrə: ".$ticket['ticket_number']."</h3>";
  } else {
    echo "<p>Növbə yoxdur</p>";
  }
}
?>
</div>
</body>
</html>
