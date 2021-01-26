<?php
session_start();

$idSession = filter_input(INPUT_GET, 'idSession', FILTER_VALIDATE_INT);

$erreur = null;
$session = null;
if($idSession == null || $idSession == false)
{
    $erreur = "idSession doit être present et entier.";
} else {
    require_once "Model/SessionDao.php";
    $session = SessionDao::getById($idSession);
}

require_once "View/indexV.php";
?>