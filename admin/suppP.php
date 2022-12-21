<?php
include_once("model/panier.php");
$pi=new panier();
$p = $_POST['d'];
$pi->supprime_panier($p);
?>