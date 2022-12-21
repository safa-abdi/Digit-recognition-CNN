<?php
header( 'content-type: text/html; charset=utf-8' );
            include('piece.php');
            $image = $_FILES["img"]["name"];
            $pi= new piece;
            $pi->ajoutPiece($_POST['nom'], $_POST['mat'],$_POST['pd'], $_POST['col'],$_POST['car'], $_POST['app'],$image);
            header("location:../view/ajoutPiece.html");
?>
