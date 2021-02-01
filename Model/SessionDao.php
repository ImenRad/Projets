<?php
class SessionDao{

    private $id_session_formation;
    private $nom;
    public function getNom()
    {
        return $this->nom;
    }

    public function getId_session_formation()
    {
        return $this->id_session_formation;
    }

    public static function getById($idSession)
    {
        $result = null;
        if($idSession == 1)
        {
            $result = array(
                "id_session_formation" => 1,
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
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SessionDao');
        $req->execute();

        $stmt = $req->fetchAll();
        return $stmt;
    }

}
?>