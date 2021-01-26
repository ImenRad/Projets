<?php
session_start();

$idSession = filter_input(INPUT_GET, 'idSession', FILTER_VALIDATE_INT);

$erreur = null;
$session = null;
if($idSession == null || $idSession == false)
{
    $erreur = "idSession doit être present et entier.";
} else {
    require_once "model/SessionDao.php";
    $session = SessionDao::getById($idSession);
}

require_once "view/indexV.php";
require_once "controller/controllerSession.php";
?>