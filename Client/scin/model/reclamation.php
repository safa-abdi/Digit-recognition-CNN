<?php
include_once("modele.php");
class reclamation extends Modele{
 private $idRec,$NomRec,$Email,$message;
 function __construct(){
    parent::__construct();
     }
 function ajoutRec($NomRec,$Email,$message){
 $query="insert into reclamation(NomRec,Email,message)values ( ?, ?, ?)";
 $res=$this->pdo->prepare($query);
return $res->execute(array($NomRec,$Email,$message));
    }
function listeRec(){
        $query="select * from reclamation";
        $res=$this->pdo->prepare($query);
        $res->execute();
        $result= $res->fetchAll();
        return $result;
           }
}
?>
