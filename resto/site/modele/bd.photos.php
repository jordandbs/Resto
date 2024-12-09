<?php
include_once "bd.pdo.php";

function getLaPhotosByIdR($idR){
    try{
        $conn = connexionPDO();
        $req = $conn->prepare("SELECT cheminP FROM photo WHERE idR = ?");
        $req->bindValue(1, $idR);
        $req->execute();   
        $unePhoto = $req->fetch(PDO::FETCH_OBJ);
        return $unePhoto;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
?>