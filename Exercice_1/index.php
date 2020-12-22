<?php
  $serverName = $_SERVER['SERVER_NAME'];
  $serverAddress = $_SERVER['SERVER_ADDR'];
  $userAgent = $_SERVER['HTTP_USER_AGENT'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 8 Exercice 1:</h1>
  <p><?= 'Server Name : ' . $serverName; ?></p>
  <p><?= 'Server Address : ' . $serverAddress; ?></p>
  <p><?= 'User Agent : ' . $userAgent; ?></p>
</body>
</html>