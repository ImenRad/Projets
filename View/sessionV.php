<html>
<head>
    <meta charset="utf-8">
    <title>Premier pas</title>
<body>
<h1>Imen</h1>
<div class="ok"> Il y a <?=$stmt?> sessions </div>
<?php 
if($stmt != 0)
{
?>
<ol>
<?php
    foreach($stmt as $s)
    {
    ?>
    <li><a href="projets.php?idSession=<?= $idSession?>"><?= $s->getNom(); ?></a>
    (#<?= $s->getId_session_formation();?>)
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
<div class="ok"> Session ok </div>
</body></head></html>