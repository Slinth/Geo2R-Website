<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="title" content="Geo2R - Votre spécialiste de l'imagerie technique par drone" />
    <meta name="description" content="Geo2R est spécialiste de l'imagerie et des prises de vue par drone. Nous intervenons sur différents domaines :énergie, BTP , agriculture..." />
    <meta name="author" content="">
    <link rel="icon" href="../../ressources/images/logo.png">

    <title>Geo2R - Administration</title>

    <!-- Custom styles for this template -->
    <link href="../ressources/css/main.css" rel="stylesheet">
    <link href="../ressources/css/actualites-page.css" rel="stylesheet">

    <style>
      .right {
        float: right;
        color: red;
        margin-right: 20px;
      }

      body {
        overflow-x: hidden;
      }

      h1 {
        margin-top: 0;
        text-align: center;
        color: orange;
      }
    </style>

    <!-- JQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Script PHP / JS -->
    <?php include('../ressources/php/get-actualites.php'); ?>
    <?php include('session.php'); ?>
    <?php
      if (isset($_GET['success'])) {
        $success = $_GET['success'];

        if ($success == 1) {
          echo '<script>alert("Actualité correctement ajoutée");</script>';
        } else if ($success == 2) {
          echo '<script>alert("Actualité correctement modifiée");</script>';
        } else if ($success == 3) {
          echo '<script>alert("Actualité correctement supprimée");</script>';
        } else if ($success == 0) {
          echo '<script>alert("Erreur lors de l\'opération.\n Veuillez recommencer");</script>';
        }
      }
    ?>
  </head>

  <body>
      <div id="main" class="container">
        <h1>Coucou <?php echo $login_session;?> !</h1>
        <a href="ajouter-actualite">NOUVELLE ACTUALITE</a> ||
        <a href="signup.php" style="color: green">Nouvel utilisateur</a>
        <a href="logout.php" class="right">Déconnexion</a>
        <table>
        <?php $actus = getFullActualites();
          if (count($actus) > 0) {
            foreach ($actus as $actu) {	?>
              <tr>
                <td><?php echo $actu['id'] ?></td>
                <td><h1><?php echo $actu['title'] ?></h1></td>
                <td><a href="modifier-actualite.php?id=<?php echo $actu['id'] ?>">MODIFIER</button></td>
                <td><a href="../ressources/php/delete-actualite.php?id=<?php echo $actu['id'] ?>">SUPPRIMER</button></td>
              </tr>
      <?php }
          } else {
            echo "Aucune actualité.";
          }?>
        </table>
      </div><!-- /container -->
    </body>
  </html>
