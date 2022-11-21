<?php
  session_start();
  if (! isset($_SESSION['valor'])) {
    $_SESSION['valor'] = 50;
  }

  if (isset($_POST['menos'])) {
    $_SESSION['valor']--;
  }

  if (isset($_POST['mas'])) {
    $_SESSION['valor']++;
  }

  if (isset($_POST['reiniciar'])) {
    $_SESSION['valor'] = 50;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barra</title>
  <style>
    input[type="range" i]:disabled {
      color: blue;
      width: 500px;
      border-color: green;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <p>Valor: <?=$_SESSION['valor']?></p>
    <p>
      <input type="submit" name="menos" value="-">
      <input type="range" name="barra" min="0" max="100" value="<?=$_SESSION['valor']?>" disabled>
      <input type="submit" name="mas" value="+">
    </p>
    <p>
      <input type="submit" name="reiniciar" value="reiniciar">
    </p>
  </form>
</body>
</html>