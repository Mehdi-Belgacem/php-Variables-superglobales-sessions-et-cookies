<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Partie 8 Exercice 3, 4, 5: Page cookie</h1>
    <p><?= $_COOKIE['login'];?></p>
    <p><?= $_COOKIE['mdp'];?></p>
</body>
</html>