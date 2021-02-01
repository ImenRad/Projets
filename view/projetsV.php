<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Premier pas</title>
  </head>
  <body>
    <h1>Michel</h1>
    <?php
    if ($erreur == null) {
      // Affichons le idSession
      ?>
      <p>Session <?= $session["nom"] ?></p>
      <?php
    } else {
      // affichons l'erreur
      ?>
      <div class="erreur"><?= $erreur ?></div>
      <?php
    }
    ?>
  </body>
</html>



