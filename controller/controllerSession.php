<?php
require "model/SessionDao.php";
$session = SessionDao::getAll();
require "view/sessionV.php";

?>