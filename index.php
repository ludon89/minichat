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

  <!-- ==================== CSS Bootstrap ==================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Accueil | Minichat</title>
</head>

<?php
if (!empty($_POST)) {
  $pseudo = $_POST["pseudo"];
}
?>

<body>
  <header>
    <h1 class="text-center">Minichat Express</h1>
  </header>

  <main style="background-color: #eee;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-4">
          <div class="card" style="border-radius: 15px;">
            <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
              <i class="fas fa-angle-left"></i>
              <h2 class="mb-0 fw-bold">Bienvenue sur notre chat</h2>
              <i class="fas fa-times"></i>
            </div>
            <div class="p-3">
              <form action=" chat.php" method="POST">
                <label for="pseudo">Veuillez saisir votre pseudo :</label>
                <input class="m-1" type="text" name="pseudo" placeholder="Votre pseudo">
                <button class="m-1" type="submit">Entrer</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- ==================== JS Bootstrap ==================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
