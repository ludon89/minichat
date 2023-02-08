<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ==================== CSS Bootstrap ==================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- ==================== CSS ==================== -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Minichat</title>
</head>

<?php
// Récupération des données soumises par l'utilisateur (ici un message + pseudo)
$pseudo = isset($_POST["pseudo"]) ? addslashes($_POST['pseudo']) : false;
$message = isset($_POST['message']) ? addslashes($_POST['message']) : false;

// Vérif s'il s'agit d'un utiliateur déja connecté
if ($pseudo) {
  $_SESSION["pseudo"] = $pseudo;
}

// Vérification de l'existence du tableau d'utilisateurs
if (!isset($_SESSION["utilisateurs"])) {
  $_SESSION["utilisateurs"] = array();
}

// Ajout des informations de l'utilisateur au tableau d'utilisateurs
$_SESSION["utilisateurs"][] = array("pseudo" => $_SESSION["pseudo"], "message" => $message);
?>

<body>
  <header>
    <h1>Minichat Express</h1>
  </header>

  <main>
    <section style="background-color: #eee;">
      <div class="container py-5">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="card" id="chat1" style="border-radius: 15px;">
              <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <i class="fas fa-angle-left"></i>
                <!-- Récupération du pseudo saisi à l'accueil -->
                <p class="mb-0 fw-bold">Bonjour, <?= $_SESSION["pseudo"] ?></p>
                <i class="fas fa-times"></i>
              </div>
              <div class="card-body">
                <!-- <div class="d-flex flex-row justify-content-start mb-4">
                  <img src="assets/img/usrpic-placeholder.svg" alt="avatar 1" style="width: 45px; height: 100%;">
                  <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                    <p class="small mb-0">Hello and thank you for visiting MDBootstrap. Please click the video below.
                    </p>
                  </div>
                </div>
                <div class="d-flex flex-row justify-content-end mb-4">
                  <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                    <p class="small mb-0">Thank you, I really like your product.</p>
                  </div>
                  <img src="assets/img/usrpic-placeholder.svg" alt="avatar 1" style="width: 45px; height: 100%;">
                </div> -->
                <!-- <div class="d-flex flex-row justify-content-start mb-4">
                  <img src="assets/img/usrpic-placeholder.svg" alt="avatar 1" style="width: 45px; height: 100%;">
                  <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                    <p class="small mb-0"></p>
                  </div>
                </div> -->

                <!-- Conteneur message utilisateur -->

                <?php
                // Affichage des informations de tous les utilisateurs
                foreach ($_SESSION["utilisateurs"] as $utilisateur) : ?>
                  <div>
                    <div class="d-flex flex-column">
                      <!-- Nom de l'utilisateur -->
                      <p class="small mb-0"><?= $utilisateur["pseudo"] ?> dit... </p>
                    </div>
                    <div class="d-flex flex-row justify-content-start mb-4">
                      <img src="assets/img/usrpic-placeholder.svg" alt="avatar 1" style="width: 45px; height: 100%;">
                      <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                        <!-- Message de l'utilisateur -->
                        <p class="small mb-0"><?= $utilisateur["message"] ?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>


                <form action="" method="POST" class="form-outline">
                  <label class="form-label" for="message">Nouveau message :</label>
                  <textarea name="message" class="form-control" id="textAreaExample" rows="4" placeholder="Type your message"></textarea>
                  <button type="submit">Envoyer</button>
                </form>
                <form action="logout.php" method="POST">
                  <button type="submit">Déconnexion</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- ==================== JS Bootstrap ==================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- ==================== JS ==================== -->
  <script src="assets/js/main.js"></script>
</body>

</html>
