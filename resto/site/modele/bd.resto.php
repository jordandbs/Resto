<?php
include_once "bd.pdo.php";

function getLesRestos(){
    try{
        $conn = connexionPDO();
        $req = $conn->prepare("SELECT * FROM resto");
        $req->execute();   
        $lesRestos = $req->fetchALL(PDO::FETCH_OBJ);
        return $lesRestos;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
?>