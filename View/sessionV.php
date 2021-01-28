<html>
<head>
    <meta charset="utf-8">
    <title>Premier pas</title>
<body>
<h1>Imen</h1>
<div class="ok"> Il y a <?=count($session)?> sessions </div>
<?php 
if(count($session) != 0)
{
?>
<ol>
<?php
    foreach($session as $sess)
    {
    ?>
    <li><a href="projets.php?idSession=<?= $sess["id_session_formation"]?>"><?= $sess["nom"] ?></a>
    (#<?= $sess["id_session_formation"]?>)
    </li>
    <?php
    }
?>
</ol>
<?php
} else {
?>
    <p>Aucune session ouverte</p>
<?php
}
?>
</body></head></html>