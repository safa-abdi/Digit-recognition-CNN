 <?php
include_once("modele.php");
class bande extends Modele{
 private $idB,$NomB,$model,$Materiel,$couleur,$epaisseur,$largeur,$longueur,$resistance,$caract,$application,$image;
 function __construct(){
    parent::__construct();
     }
 function ajoutBande($NomB,$model,$Materiel,$couleur,$epaisseur,$largeur,$longueur,$resistance,$caract,$application,$image){
 $query="insert into bande(NomB,model,Materiel,couleur,epaisseur,largeur,longueur,resistance,caract,application,image)values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
 $res=$this->pdo->prepare($query);
return $res->execute(array($NomB,$model,$Materiel,$couleur,$epaisseur,$largeur,$longueur,$resistance,$caract,$application,$image));
    }
function modifBande($idB,$NomB,$model,$Materiel,$couleur,$epaisseur,$largeur,$longueur,$resistance,$caract,$application,$image){
        $query="update bande set NomB=?,model=?,Materiel=?,couleur=?,epaisseur=?,largeur=?,longueur=?,resistance=?,caract=?,application=?,image=? where idB=?";
        $res=$this->pdo->prepare($query);
       return $res->execute(array($NomB,$model,$Materiel,$couleur,$epaisseur,$largeur,$longueur,$resistance,$caract,$application,$image));
           }
function supprime($idB) {
        $query = "delete from bande where idB=?";
        $res=$this->pdo->prepare($query);
       return $res->execute(array($idB));
        }
 function listeB(){
            $query="select * from bande";
            $res=$this->pdo->prepare($query);
            $res->execute();
            $result= $res->fetchAll();
            return $result;
               }
public function getbande($idB)
  {  
        $req = "select * from bande where idB=?";
        $result = $this->pdo->prepare($req);
        $result->execute(array($idB));
        return $result;
  }
}
?>
