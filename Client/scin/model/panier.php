<?php
include_once("modele.php");
class panier extends Modele{
 private $idC,$NomPB,$imgPB,$qte,$reference;
 function __construct(){
    parent::__construct();
     }
 function ajoutComm($NomPB,$imgPB,$qte,$reference){
 $query="insert into panier(NomPB,imgPB,qte,reference)values ( ?, ?, ?, ?)";
 $res=$this->pdo->prepare($query);
return $res->execute(array($NomPB,$imgPB,$qte,$reference));
    }
function listeP(){
        $query="select * from panier";
        $res=$this->pdo->prepare($query);
        $res->execute();
        $result= $res->fetchAll();
        return $result;
           }
function supprime_panier($idC) {
            $query = "delete from panier where idC=?";
            $res=$this->pdo->prepare($query);
           return $res->execute(array($idC));
            }
}
?>
