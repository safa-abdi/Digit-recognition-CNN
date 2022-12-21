<?php
include_once("modele.php");
class piece extends Modele{
 private $idP,$NomP,$Materiaux,$Poids,$couleur,$caract,$app,$image;
 function __construct(){
    parent::__construct();
     }
 function ajoutPiece($NomP,$Materiaux,$Poids,$couleur,$caract,$app,$image){
 $query="insert into piece(NomP,Materiaux,Poids,couleur,caract,app,image)values (?, ?, ?, ?, ?, ?, ? )";
 $res=$this->pdo->prepare($query);
return $res->execute(array($NomP,$Materiaux,$Poids,$couleur,$caract,$app,$image));
    }
function supprimeP($idP) {
        $query = "delete from piece where idP=?";
        $res=$this->pdo->prepare($query);
       return $res->execute(array($idP));
        }
function listeP(){
    $query="select * from piece";
    $res=$this->pdo->prepare($query);
    $res->execute();
    $result= $res->fetchAll();
    return $result;
 }
}
?>
