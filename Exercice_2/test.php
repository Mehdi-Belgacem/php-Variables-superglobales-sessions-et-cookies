<?php session_start();?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Partie 8 Exercice 2: Deuxième page.</h1>
    <p><?= 'Re-bonjour ' . $_SESSION['lastName'] . ' ' . $_SESSION['firstName'] . ', tu as ' . $_SESSION['age'] . ' ans.'; ?>
    </p>
</body>
</html>