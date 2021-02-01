<?php
include "Model/MonPdo.php";
session_start();

$idSession = filter_input(INPUT_GET, 'id_session_formation', FILTER_VALIDATE_INT);

$erreur = null;
$stmt = null;
if($idSession == null || $idSession == false)
{
    $erreur = "idSession doit être present et entier.";
} else {
    require_once "model/SessionDao.php";
    $stmt = SessionDao::getById($idSession);    
}

require_once "view/sessionV.php";
require_once "controller/controllerSession.php";
?>