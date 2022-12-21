<?php
            include ('piece.php');
            $pi = new piece;
            $pi->supprimeP($_POST['id']);
            header('location:../view/suppP.html');
?>