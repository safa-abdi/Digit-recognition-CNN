<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier bande</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>modifier une bande</h3>
        </div>
        <fieldset>
            <form action="../modele/modifB_action.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-6">
                        <div class="form-group">
                            <label >id bande</label>
                            <input type="text"  name="num" class="form-control" value="" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Nom bande</label>
                            <input type="text"  name="nom" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Modele</label>
                            <input type="text"  name="mod" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Matériel</label>
                            <input type="text" name="mat" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Couleur</label>
                            <input type="text" name="col" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Epaisseur</label>
                            <input type="text" name="ep" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Largeur</label>
                            <input type="text" name="lar" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Longueur</label>
                            <input type="text" name="long" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Resistance</label>
                            <input type="text"  name="resis" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Caracteristique</label>
                            <input type="text"  name="cara" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Application</label>
                            <input type="text"  name="app" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >image</label><br>
                               <input name="img" type="file" /> 
                        </div>
                    </div>
                </div>
                <input type="submit" value="modifier">
            </form>
        </fieldset>
    </div>
</body>
</html>