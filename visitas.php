<?php
  session_start();
  if (isset($_SESSION['num_visitas'])) {
    $_SESSION['num_visitas']++;
  } else {
    $_SESSION['num_visitas'] = 1;
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visitas</title>
</head>
<body>

  <h1>Número de visitas</h1>
  <h2>Hola, has visitado este sitio <?=$_SESSION['num_visitas']?> veces.</h2>
</body>
</html>