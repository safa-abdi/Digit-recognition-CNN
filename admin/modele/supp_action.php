<?php
            include ('bande.php');
            $bd = new bande;
            $bd->supprime($_POST['id']);
            header('location:../view/suppbande.html');
?>