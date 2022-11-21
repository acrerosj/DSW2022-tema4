<?php
  session_start();
  $_SESSION['visitas'][] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiempos de visitas</title>
</head>
<body>
  <p>Has visitado este sitio en estas ocasiones:</p>
  <ul>
<?php
  foreach($_SESSION['visitas'] as $visita) {
    printf("<li>%s</li>", strftime("%d/%m/%Y %H:%M:%S", $visita));
  }
?>
  </ul>
</body>
</html>