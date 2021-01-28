<?php
class SessionDao{
    public static function getById($idSession)
    {
        $result = null;
        if($idSession == 1)
        {
            $result = array(
                "id_session" => 1,
                "nom" => "CDA 1",
            );
        }
        return $result;
    }
}
?>