<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pagina de inicio</h1>
<?php
  if (isset($_COOKIE['name'])) {
    printf("<h2>Bienvenido %s</h2>", $_COOKIE['name']);
    printf("<p>Nivel de acceso: %s</p>", $_COOKIE['level']);
  } else {
?>
  <h2>No tiene acceso, debe registrarse</h2>
  <p><a href="login.html">Acceder</a></p>
<?php
  }
?>
</body>
</html>