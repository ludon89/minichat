<!--
  Créer une page d'accueil invitant l'utilisateur à saisir son pseudo. Une fois validé,
  l'utilisateur sera dirigé vers la page de chat, dans laquelle, tous les messages des utilisateurs seront affichés.
  À la suite, il est également possible d'envoyer un nouveau message via un champ de saisie.
  Les utilisateurs doivent pouvoir quitter le chat par le biais d'un bouton de déconnexion et seront redirigés vers l'accueil .
-->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ==================== CSS ==================== -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- ==================== CSS Bootstrap ==================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


  <title>Accueil | Minichat</title>
</head>

<body>

  <?php
  if (!empty($_POST)) {
    $pseudo = $_POST["pseudo"];
  }
  ?>

  <header>
    <h1>Minichat Express</h1>
  </header>

  <h2>Bienvenue sur notre chat</h2>
  <form action="chat.php" method="POST">
    <label for="pseudo">Veuillez saisir votre pseudo :</label>
    <input type="text" name="pseudo" placeholder="Votre pseudo">
    <button type="submit">Entrer</button>
  </form>


  <!-- ==================== JS Bootstrap ==================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- ==================== JS ==================== -->
  <script src="assets/js/main.js"></script>
</body>

</html>
