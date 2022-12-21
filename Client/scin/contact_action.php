<?php
include_once("model/reclamation.php");
include_once("model/message.php");
$rec=new reclamation();
$msg=new message();
$a=$_POST['nom'];
$b=$_POST['em'];
$m=$_POST['ms'];
$Sujet=$_POST['a'];
if($Sujet=='RM'){
$rec->ajoutRec($a,$b,$m);
}
else if($Sujet=='DM'){
$msg->ajoutMsg($a,$b,$m);
}
?>