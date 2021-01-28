<?php
require "Model/SessionDao.php";

$session = SessionDao::getAll();

require "view/sessionV.php";

?>