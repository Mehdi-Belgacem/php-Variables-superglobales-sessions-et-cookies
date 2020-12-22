<?php 
session_start();
    if (isset($_POST['email'])) { // Si isset($_POST['email']) vérifie que cette variable existe, qu'elle contient une valeur et qu'elle est différente de NULL.
        setcookie('login', $_POST['email'], time() + 60*60*24*365); // Alors on enregistre dans un cookie nommé ('login') le contenu de cette valeur ('email') qui seras garder pendant une année.
    }
    if (isset($_POST['password'])) {
        setcookie('mdp', $_POST['password'], time() + 60*60*24*365);
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 8 exercice 3, 4, 5:</h1>
  <form method="POST" action="cookiePage.php">
    <input type="email" name="email" id="email" placeholder="Adresse mail">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <input type="submit" value="VALIDER">
  </form>
</body>
</html>