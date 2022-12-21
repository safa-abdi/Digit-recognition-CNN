<?php
   $id=$_POST['d'];
   include_once('model\bande.php');
   $bd=new bande();
   $bd->supprime($id);
   header("location:listeB.php")
?>