<html>
<head>
    <meta charset="utf-8">
    <title>Premier pas</title>
</head>
<body>
    <h1>Imen</h1>
    <?php if($erreur == null)
    {
    ?>
        <p>Session vaut <?= $session["nom"] ?> </p>
    <?php
    }else {
    ?>
        <div class="erreur"><?=$erreur?></div>
    <?php
    }
    ?>
    
</body>
</html>