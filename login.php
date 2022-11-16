<?php
$conn = new mysqli('db','root','test','users');

$name = $_GET['name'];
$pw = $_GET['pw'];
$sql = "SELECT * FROM user WHERE name='$name' AND pw='$pw'";
//echo $sql;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row) {
  setcookie('name', $row['name'], time()+60);
  setcookie('level', $row['level']);
  echo "<p>" . $row['name'] . "</p>";
  echo "<p>" . $row['pw'] . "</p>";
  echo "<p>" . $row['level'] . "</p>";
  
} else {
  echo "<h2>Usuario/Contraseña incorrectos</h2>";
}
$result->free();
$conn->close();
?>
<a href="index.php">Página inicio</a>