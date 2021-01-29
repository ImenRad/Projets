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

    public static function getAll()
    {
        // return array(
        //     array(
        //         "id_session_formation" => 1,
        //         "nom" => "CDA1"
        //     ),
        //     array(
        //         "id_session_formation" => 2,
        //         "nom" => "CDA2"
        //     ));
        $req = MonPdo::getInstance()->prepare("SELECT * FROM session_formation");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();

        $stmt = $req->fetchAll();
        return $stmt;
    }

}
?>