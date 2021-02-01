<?php
class SessionDao{
    public static function getById($idSession)
    {
        //$result = null;
        //if($idSession == 1)
        //{
         //   $result = array(
         //       "id_session" => 1,
         //       "nom" => "CDA 1",
        //    );
       // }
       // return $result;
       require_once 'DB.php';
         $db=DB::getConnection();
         $stmt = $db->prepare($sql);
         //execut
         $stmt->execute(); 
         //return les resultats from dun tableau au tab associatif
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>