<!DOCTYPE html>

<?php
$idSession = filter_input (INPUT_GET,"idSession", FILTER_VALIDATE_INT);
$erreur=null;

if($idSession == NULL || $idSession == false){   // pas idSession ou //false idSession n'est pas entier
  $erreur="idSession doit etre present et entier";  
}else{
    //apelant le model
    require_once "modele/SessionDao.php";
    $session=SessionDao::getById($idSession);
    if($session==null){
        $erreur="Session $idSession introuvable";
    }
}

require_once "vue/indexV.php";

?>