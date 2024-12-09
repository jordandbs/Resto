<?php
include_once "bd.pdo.php";

function getLesTypesCuisinebyIdR($idR){
    try{
        $conn = connexionPDO();
        $req = $conn->prepare("SELECT libelleTC FROM typecuisine INNER JOIN proposer ON typecuisine.idTC = proposer.idTC INNER JOIN resto ON proposer.idR = resto.idR WHERE resto.idR = ?");
        $req->bindValue(1, $idR);
        $req->execute();  

        $typescuisines = $req->fetchALL(PDO::FETCH_OBJ);
        return $typescuisines;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
?>