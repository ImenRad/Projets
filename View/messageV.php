<?php

?>
<p><?= $erreur ?></p>
<?php
if(isset($e))
{
?>
<p><?=$e->getMessage()?></p>
<?php
}
