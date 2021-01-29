<?php
require "Model/SessionDao.php";
try{
$session = SessionDao::getAll();
require_once "View/sessionV.php";
}
catch (PDOException $e) {
    $erreur = "Problème technique. Veuillez essayer ultérieurement. ";
    require_once "View/messageV.php";
}

?>