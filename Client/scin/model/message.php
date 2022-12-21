<?php
include_once("modele.php");
class message extends Modele{
 private $idM,$NomPer,$Email,$message;
 function __construct(){
    parent::__construct();
     }
 function ajoutMsg($NomPer,$Email,$message){
 $query="insert into message(NomPer,Email,message)values (?, ?, ?)";
 $res=$this->pdo->prepare($query);
return $res->execute(array($NomPer,$Email,$message));
    }
function listeMsg(){
        $query="select * from message";
        $res=$this->pdo->prepare($query);
        $res->execute();
        $result= $res->fetchAll();
        return $result;
           }
}
?>
