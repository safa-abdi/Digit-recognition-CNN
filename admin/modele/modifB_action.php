<?php
            require_once('bande.php');
            $image=$_FILES['img']['name'];
            $bd = new bande;
            $bd->modifBande($_POST['num'],$_POST['nom'], $_POST['mod'],$_POST['mat'], $_POST['col'],$_POST['ep'], $_POST['lar'], $_POST['long'], $_POST['resis'], $_POST['cara'], $_POST['app'],$image);
            header("location:../view/modifB.php");
?>