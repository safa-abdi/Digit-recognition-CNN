<?php
include_once("model/panier.php");
$pi=new panier();
if(isset($_POST['d'])){
$p = $_POST['d'];
$pi->supprime_panier($p);
header("location:commander.php");
}
?>